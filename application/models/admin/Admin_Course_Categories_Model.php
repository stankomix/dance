<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Course_Categories_Model extends CI_Model {

  public function get_all_course_categories() {
    $this->db->select('coursecategories.*');
    $this->db->from('coursecategories');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $course_categories = $query->result_array();
      return $course_categories;
    }

    return false;
  }

  public function get($id) {
    $this->db->select('coursecategories.*');
    $this->db->from('coursecategories');
    $this->db->where('coursecategories.id='.$id);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $course = $query->row_array();
      return $course;
    }

    return false;
  }

  public function add($data) {

    $this->db->insert('coursecategories', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    }

    return false;

  }

  public function edit($id, $data) {

    $this->db->where('id', $id);
    return $this->db->update('coursecategories', $data);

  }

  public function delete($id) {

    $this->db->delete('coursecategories', array('id', $id));

  }

  public function get_category_courses($id) {

    $this->db->select('course.*, coursetype.coursetypedesc');
    $this->db->from('course');
    $this->db->join('coursetype', 'coursetype.coursetype = course.type');
    $this->db->where('course.categoryid='.$id);

    $query = $this->db->get();

    return $query->result_array();

  }

  public function get_course_categories_list() {
    $c_categs_db = $this->db->get('coursecategories');
    $c_categs = array();
    foreach($c_categs_db->result_array() as $k => $c_categ) {
      $c_categs[$c_categ['id']] = $c_categ['name'];
    }

    return $c_categs;
  }

}

?>
