<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Lessons_Model extends CI_Model {

  public function get($id) {
    $this->db->select('lesson.*');
    $this->db->from('lesson');
    $this->db->where('lesson.id='.$id);

    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      $lesson = $query->row_array();
      $lesson['booked_places'] = $this->get_booked_places($lesson['id'])['booked_places'];
      $lesson['free_places'] = $lesson['num_places'] - $lesson['booked_places'];

      return $lesson;
    }

    return false;
  }

  public function get_all_lessons() {
    $this->db->select('lesson.*');
    $this->db->from('lesson');
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

  public function get_lesson_persons($lesson_id) {
    $this->db->select('lessonperson.*, coursetype.coursetypedesc, Kursteilnehmer.Vorname, Kursteilnehmer.Nachname');
    $this->db->from('lessonperson');
    //$this->db->join('lesson', 'lesson.id = lessonperson.lessonid');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid = lessonperson.kursteilnehmerid');
    $this->db->join('coursetype', 'coursetype.coursetype = lessonperson.coursetype');
    $this->db->where('lessonperson.lessonid='.$lesson_id.'');
    $this->db->order_by('lessonperson.id DESC');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      return $query->result_array();

    }

    return false;
  }

  public function get_enrolled_lessons($Teilnehmerid) {
    $this->db->select('lesson.*, coursetype.coursetypedesc, lessonperson.waiting, lessonperson.trial');
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

  private function get_booked_places($lesson_id) {
    $this->db->select('COUNT(id) as booked_places');
    $this->db->from('lessonperson');
    $this->db->where('lessonperson.lessonid = "'.$lesson_id.'"');

    $query = $this->db->get();
    return $query->row_array();
  }

  public function add($data) {

    $this->db->insert('lesson', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    }

    return false;

  }

  public function edit($id, $data) {

    $this->db->where('id', $id);
    return $this->db->update('lesson', $data);

  }

}

?>
