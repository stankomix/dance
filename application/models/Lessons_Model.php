<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Lessons_Model extends CI_Model {

  public function get_available_lessons($Teilnehmerid, $enrolled=false, $course_type=false) {

    $where = 'lesson.aktiv=1
                        AND lesson.validfrom >= (DATE_SUB(CURDATE(), INTERVAL 365 DAY))
                      ';
    if($course_type) {
      $where .= ' AND lesson.coursetype='.$course_type;
    }

    $this->db->select('lesson.*, coursetype.coursetypedesc');
    $this->db->from('lesson');
    $this->db->join('coursetype', 'coursetype.coursetype = lesson.coursetype');
    $this->db->where($where);

    $this->db->order_by('lesson.id DESC');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      if($enrolled) {

        $lessons = $query->result_array();
        $lessons_data = $this->get_enrolled_lessons_data($Teilnehmerid);
        $enrolled_lessons_ids = $lessons_data['ids'];
        $waiting_lessons_ids = $lessons_data['waiting_ids'];

        foreach($lessons as $k => $lesson) {
          if(in_array($lesson['id'], $enrolled_lessons_ids)) {
            $lessons[$k]['enrolled'] = true;
          } else {
            $lessons[$k]['enrolled'] = false;
          }

          if(in_array($lesson['id'], $waiting_lessons_ids)) {
            $lessons[$k]['waiting'] = '1';
          } else {
            $lessons[$k]['waiting'] = '0';
          }

          $lessons[$k]['booked_places'] = $this->get_booked_places($lesson['id'])['booked_places'];

          $lessons[$k]['free_places'] = $lessons[$k]['num_places'] - $lessons[$k]['booked_places'];
        }
        return $lessons;
      } else {
        return $query->result_array();
      }
    }

    return false;
  }

  protected function get_lesson($lesson_id) {
    $this->db->select('lesson.*');
    $this->db->from('lesson');
    $this->db->where('lesson.id='.$lesson_id);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      //return $query->row_array();
      $lesson = $query->row_array();
      $lesson['booked_places'] = $this->get_booked_places($lesson_id)['booked_places'];
      return $lesson;
    } else {
      return false;
    }
  }

  protected function get_membership_id_from_coursetype($Teilnehmerid, $course_type) {
    $this->db->select('Teilnahmeid');
    $this->db->from('Kursteilnahme');
    $this->db->where('Kursteilnehmerid='.$Teilnehmerid.' AND coursetype='.$course_type.' AND cancelled=0');
    $this->db->order_by('Teilnahmeid DESC');
    $this->db->limit(1);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row_array()['Teilnahmeid'];
    } else {
      return 0;
    }
  }

  private function get_booked_places($lesson_id) {
    $this->db->select('COUNT(id) as booked_places');
    $this->db->from('lessonperson');
    $this->db->where('lessonperson.lessonid = "'.$lesson_id.'"');

    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_waiting_person($lesson_id) {
    $this->db->select('*');
    $this->db->from('lessonperson');
    $this->db->where('lessonid='.$lesson_id.' AND waiting=1');
    $this->db->order_by('waiting_since ASC');
    $this->db->limit(1);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row_array();
    }
    return false;
  }

  public function unwait_person($Teilnehmerid, $lesson_id) {
    $this->db->where('lessonid='.$lesson_id.'
                      AND kursteilnehmerid='.$Teilnehmerid.'
                    ');
    $this->db->update('lessonperson', array(
                                          'waiting' => '0'
                                        )
                      );
    return true;
  }

  public function lesson_enroll($Teilnehmerid, $lesson_id, $trial=0) {

    $exists = $this->db->get_where('lessonperson', array('lessonid' => $lesson_id, 'kursteilnehmerid' => $Teilnehmerid), 1, 0);

    $return = array('return' => false, 'waiting' => '0');

    if ($exists->num_rows() == 0) {
      $lesson = $this->get_lesson($lesson_id);
      if($lesson !== false) {
        $membership_id = $this->get_membership_id_from_coursetype($Teilnehmerid, $lesson['coursetype']);

        $data = array(
          'kursteilnehmerid' => $Teilnehmerid,
          'coursetype' => $lesson['coursetype'],
          'lessonid' => $lesson_id,
          'teilnahmeid' => $membership_id,
          'erfasstam' => date('Y-m-d H:i:s', time()),
          'waiting' => '0',
          'trial' => $trial,
        );

        if ((int)$lesson['num_places'] > 0 && ((int)$lesson['num_places'] - (int)$lesson['booked_places']) < 1 ) {
          $data['waiting'] = '1';
          $data['waiting_since'] = date('Y-m-d H:i:s', time());
        }

        $this->db->insert('lessonperson', $data);

        $return['return'] = true;
        $return['waiting'] = $data['waiting'];
      }
    }

    return $return;

  }

  public function lesson_disenroll($Teilnehmerid, $lesson_id) {

    $exists = $this->db->get_where('lessonperson', array('lessonid' => $lesson_id, 'kursteilnehmerid' => $Teilnehmerid), 1, 0);

    if ($exists->num_rows() == 0) {
      return false;
    }

    $this->db->delete('lessonperson', array('lessonid' => $lesson_id, 'kursteilnehmerid' => $Teilnehmerid));
    return true;

  }

  public function get_enrolled_lessons($Teilnehmerid) {
    $this->db->select('lesson.*, coursetype.coursetypedesc, lessonperson.waiting');
    $this->db->from('lessonperson');
    $this->db->join('lesson', 'lesson.id = lessonperson.lessonid');
    //$this->db->join('course', 'course.id = courseperson.course');
    $this->db->join('coursetype', 'coursetype.coursetype = lessonperson.coursetype');
    $this->db->where('lessonperson.kursteilnehmerid='.$Teilnehmerid.'
                      ');
                      //AND lesson.validfrom >= (DATE_SUB(CURDATE(), INTERVAL 365 DAY))
    $this->db->order_by('lesson.id DESC');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $lessons = $query->result_array();
      foreach($lessons as $k => $lesson) {
        $lessons[$k]['booked_places'] = $this->get_booked_places($lesson['id'])['booked_places'];
        $lessons[$k]['free_places'] = $lessons[$k]['num_places'] - $lessons[$k]['booked_places'];
      }
      return $lessons;

    }

    return false;
  }

  public function get_enrolled_lessons_data($Teilnehmerid) {
    $this->db->select('lessonperson.lessonid, lessonperson.waiting');
    $this->db->from('lessonperson');
    $this->db->where('lessonperson.kursteilnehmerid='.$Teilnehmerid);

    $query = $this->db->get();

    $return_a = array(
      'ids' => array(),
      'waiting_ids' => array(),
    );

    if ($query->num_rows() > 0) {
      foreach($query->result_array() as $k => $v) {
        $return_a['ids'][] = $v['lessonid'];
        if($v['waiting'] == '1') {
          $return_a['waiting_ids'][] = $v['lessonid'];
        }
      }
    }

    return $return_a;
  }

}

?>
