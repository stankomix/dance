<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Courses_Model extends CI_Model {

  public function get($id) {
    $this->db->select('course.*');
    $this->db->from('course');
    $this->db->where('course.id='.$id);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $course = $query->row_array();
      $course['booked_places'] = $this->get_booked_places($id)['booked_places'];
      return $course;
    }

    return false;
  }

  public function has_membership_of_coursetype($Teilnehmerid, $course_type) {
    $this->db->select('*');
    $this->db->from('Kursteilnahme');
    $this->db->where('Kursteilnehmerid='.$Teilnehmerid.'
                      AND coursetype='.$course_type.'
                      AND cancelled=0
                      AND Validuntil > CURDATE()
        ');
    $this->db->limit('1');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row_array();
    }
    return false;

  }

  public function get_enrolled_courses($Teilnehmerid, $get_genders=false) {

    $select = 'course.*, coursetype.coursetypedesc, courseperson.waiting';

    if($get_genders) {
      $select .= ', (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="m" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course=course.id
                )
        ) AS num_males
      , (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="w" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course=course.id
                )
        ) AS num_females';
    }

    $this->db->select($select);
    $this->db->from('courseperson');
    $this->db->join('course', 'course.id = courseperson.course');
    $this->db->join('coursetype', 'coursetype.coursetype = course.type');
    $this->db->where('courseperson.person='.$Teilnehmerid);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $courses = $query->result_array();
      foreach($courses as $k => $course) {
        $courses[$k]['booked_places'] = $this->get_booked_places($course['id'])['booked_places'];
        $courses[$k]['free_places'] = $courses[$k]['num_places'] - $courses[$k]['booked_places'];
      }
      return $courses;

    }

    return false;
  }

  private function get_booked_places($course) {
    $this->db->select('COUNT(id) as booked_places');
    $this->db->from('courseperson');
    $this->db->where('courseperson.course = "'.$course.'"');

    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_enrolled_courses_data($Teilnehmerid) {
    $this->db->select('courseperson.course, courseperson.waiting');
    $this->db->from('courseperson');
    $this->db->where('courseperson.person='.$Teilnehmerid);

    $query = $this->db->get();

    $return_a = array(
      'ids' => array(),
      'waiting_ids' => array(),
    );

    if ($query->num_rows() > 0) {

      foreach($query->result_array() as $k => $v) {
        $return_a['ids'][] = $v['course'];
        if($v['waiting'] == '1') {
          $return_a['waiting_ids'][] = $v['course'];
        }
      }

    }

    return $return_a;

  }

  public function get_available_courses($Teilnehmerid, $get_genders=false) {

    $select = 'course.*, coursetype.coursetypedesc, coursecategories.name AS category';
    if($get_genders) {
      $select .= ', (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="m" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course=course.id
                )
        ) AS num_males
      , (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="w" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course=course.id
                )
        ) AS num_females';
    }
    $this->db->select($select);
    $this->db->from('course');
    $this->db->join('coursetype', 'coursetype.coursetype = course.type');
    $this->db->join('coursecategories', 'coursecategories.id = course.categoryid');
    $this->db->where('course.type IN (
                                      SELECT DISTINCT Kursteilnahme.coursetype
                                        FROM Kursteilnahme
                                        WHERE Kursteilnahme.Kursteilnehmerid='.$Teilnehmerid.'
                                          AND Kursteilnahme.Validuntil >= (DATE_SUB(CURDATE(), INTERVAL 365 DAY))
                                          AND Kursteilnahme.cancelled=0
                                      )
                      ');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $courses = $query->result_array();
      $courses_data = $this->get_enrolled_courses_data($Teilnehmerid);
      $enrolled_courses_ids = $courses_data['ids'];
      $waiting_courses_ids = $courses_data['waiting_ids'];

      foreach($courses as $k => $course) {
        if(in_array($course['id'], $enrolled_courses_ids)) {
          $courses[$k]['enrolled'] = true;
        } else {
          $courses[$k]['enrolled'] = false;
        }

        if(in_array($course['id'], $waiting_courses_ids)) {
          $courses[$k]['waiting'] = '1';
        } else {
          $courses[$k]['waiting'] = '0';
        }

        $courses[$k]['booked_places'] = $this->get_booked_places($course['id'])['booked_places'];

        $courses[$k]['free_places'] = $courses[$k]['num_places'] - $courses[$k]['booked_places'];
      }
      return $courses;

    }

    return false;
  }

  public function get_waiting_person($course_id) {
    $this->db->select('*');
    $this->db->from('courseperson');
    $this->db->where('course='.$course_id.' AND waiting=1');
    $this->db->order_by('waiting_since ASC');
    $this->db->limit(1);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row_array();
    }
    return false;
  }

  public function unwait_person($Teilnehmerid, $course_id) {
    $this->db->where('course='.$course_id.'
                      AND person='.$Teilnehmerid.'
                    ');
    $this->db->update('courseperson', array(
                                          'waiting' => '0'
                                        )
                      );
    return true;
  }

  public function course_enroll($Teilnehmerid, $course_id, $trial=0) {

    $exists = $this->db->get_where('courseperson', array('course' => $course_id, 'person' => $Teilnehmerid), 1, 0);

    $return = array('return' => false, 'waiting' => '0');

    if ($exists->num_rows() == 0) {
      $course = $this->get($course_id);

      $data = array(
        'course' => $course_id,
        'person' => $Teilnehmerid,
        'waiting' => '0',
        'trial' => $trial,
      );

      if ((int)$course['num_places'] > 0 && ((int)$course['num_places'] - (int)$course['booked_places']) < 1 ) {
        $data['waiting'] = '1';
        $data['waiting_since'] = date('Y-m-d H:i:s', time());
      }

      $this->db->insert('courseperson', $data);

      $return['return'] = true;
      $return['waiting'] = $data['waiting'];
    }

    return $return;

  }

  public function course_disenroll($Teilnehmerid, $course_id) {

    $exists = $this->db->get_where('courseperson', array('course' => $course_id, 'person' => $Teilnehmerid), 1, 0);

    if ($exists->num_rows() == 0) {
      return false;
    }

    $this->db->delete('courseperson', array('course' => $course_id, 'person' => $Teilnehmerid));
    return true;

  }

}

?>
