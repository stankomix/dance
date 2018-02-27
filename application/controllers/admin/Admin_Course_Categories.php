<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Course_Categories extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');

    $this->load->model('admin/Admin_Course_Categories_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;

    $this->verify_login();
  }

  public function index() {

    $course_categories = $this->Admin_Course_Categories_Model->get_all_course_categories();
    $this->data['course_categories'] = $course_categories;

    $this->data['inner_page'] = 'admin/course_categories/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function add() {

    $this->data['inner_page'] = 'admin/course_categories/add';

    $this->form_validation->set_rules('name', 'Name', 'trim|min_length[3]|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'name' => $this->input->post('name'),
      );

      $added = $this->Admin_Course_Categories_Model->add($data);

      if($added) {
        $message = array('type' => 'success', 'text' => 'Course category added successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/course_categories');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when adding.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/course_categories/add');
      }

    }

  }

  public function edit($id) {

    $this->data['course'] = $this->Admin_Course_Categories_Model->get($id);

    if($this->data['course'] == false) {
      $message = array('type' => 'danger', 'text' => 'This course category is no longer available.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/course_categories');
    }

    $this->data['inner_page'] = 'admin/course_categories/edit';

    $this->form_validation->set_rules('name', 'Name', 'trim|min_length[3]|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'name' => $this->input->post('name'),
      );

      $edited = $this->Admin_Course_Categories_Model->edit($id, $data);

      if($edited) {
        $message = array('type' => 'success', 'text' => 'Course category edited successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/course_categories');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when editing.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/course_categories/edit/'.$id);
      }

    }

  }

  public function view($id) {
    $course_category = $this->Admin_Course_Categories_Model->get($id);
    $this->data['course_category'] = $course_category;
    $this->data['conf'] = $this->conf;

    $this->data['courses'] = $this->Admin_Course_Categories_Model->get_category_courses($id);

    $this->data['inner_page'] = 'admin/course_categories/view';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function delete($id) {

    $courses = $this->Admin_Course_Categories_Model->get_category_courses($id);

    if($courses == false) {

      $this->Admin_Course_Categories_Model->delete($id);

      $message = array('type' => 'success', 'text' => 'Course category has been deleted.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/course_categories');

    } else {
      $message = array('type' => 'danger', 'text' => 'Category cannot be deleted because there are still courses using it.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/course_categories/view/'.$id);
    }

  }

}
