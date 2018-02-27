<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home_Model extends CI_Model {

  public function get_schedule_lessons() {

    $where = 'lesson.aktiv=1
                        AND lesson.validuntil >= CURDATE()
                      ';

    $this->db->select('lesson.*, coursetype.coursetypedesc');
    $this->db->from('lesson');
    $this->db->join('coursetype', 'coursetype.coursetype = lesson.coursetype');
    $this->db->where($where);

    $this->db->order_by('lesson.courseday ASC, lesson.starttime ASC');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      /*if($enrolled) {

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
      } else {*/
        return $query->result_array();
      //}
    }

    return false;
  }

  public function get_lesson($lesson_id) {
    $this->db->select('lesson.*, coursetype.coursetypedesc');
    $this->db->from('lesson');
    $this->db->join('coursetype', 'coursetype.coursetype = lesson.coursetype');
    $this->db->where('lesson.aktiv=1
                      AND lesson.validuntil >= CURDATE()
                      AND lesson.id='.$lesson_id);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->row_array();
    }
    return false;
  }

  public function get_schedule_courses($get_genders=false) {

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
    $this->db->where('course.abotype!=0');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {

      $courses = $query->result_array();
      return $courses;

    }

    return false;
  }

  public function get_course($id) {
    $this->db->select('course.*, coursetype.coursetypedesc, coursecategories.name AS category');
    $this->db->from('course');
    $this->db->join('coursetype', 'coursetype.coursetype = course.type');
    $this->db->join('coursecategories', 'coursecategories.id = course.categoryid');
    $this->db->where('course.id='.$id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }
    return false;
  }

  public function get_schedule_memberships() {

    $where = 'inaktiv=0';
    $where .= ' AND based_on=2'; // lessons

    $this->db->select('abotype, Description');
    $this->db->from('abotype');
    $this->db->where($where);

    $a_types_db = $this->db->get();
    $a_types = array();

    foreach($a_types_db->result_array() as $k => $a_type) {
      $a_types[$a_type['abotype']] = $a_type['Description'];
    }

    return $a_types;

  }

}

?>
