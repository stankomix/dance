<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Courses_Model extends CI_Model {

  public function get_all_courses($get_genders=false) {

    $select = 'course.*, coursetype.coursetypedesc';

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
    //$this->db->where('');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $courses = $query->result_array();
      return $courses;

    }

    return false;
  }

  public function get($id, $get_genders=false) {

    $select = 'course.*';

    if($get_genders) {
      $select .= ', (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="m" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course='.$id.'
                )
        ) AS num_males
      , (
        SELECT COUNT(Kursteilnehmer.Teilnehmerid)
              FROM Kursteilnehmer
              WHERE Kursteilnehmer.Anrede="w" AND Kursteilnehmer.Teilnehmerid IN (
                  SELECT courseperson.person FROM courseperson WHERE courseperson.course='.$id.'
                )
        ) AS num_females';
    }

    $this->db->select($select);
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

  public function add($data) {

    $this->db->insert('course', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    }

    return false;

  }

  public function edit($id, $data) {

    $this->db->where('id', $id);
    return $this->db->update('course', $data);

  }

  public function get_course_types() {
    $c_types_db = $this->db->get('coursetype');
    $c_types = array();
    foreach($c_types_db->result_array() as $k => $c_type) {
      $c_types[$c_type['coursetype']] = $c_type['coursetypedesc'];
    }

    return $c_types;
  }

  public function get_course_persons($courseid) {
    $this->db->select('courseperson.*, Kursteilnehmer.Email');
    $this->db->from('courseperson');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid = courseperson.person');

    $this->db->where('courseperson.course='.$courseid);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $course_persons = $query->result_array();
      return $course_persons;

    }

    return false;
  }

  public function get_enrolled_courses($Teilnehmerid) {
    $this->db->select('course.*, coursetype.coursetypedesc, courseperson.waiting, courseperson.trial');
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

}

?>
