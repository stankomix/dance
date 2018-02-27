<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Courses extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');

    $this->load->model('admin/Admin_Courses_Model');
    $this->load->model('admin/Admin_Course_Categories_Model');
    $this->load->model('admin/Admin_Memberships_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;

    $this->verify_login();
  }

  public function index() {

    $courses = $this->Admin_Courses_Model->get_all_courses(true);
    $this->data['courses'] = $courses;

    $this->data['inner_page'] = 'admin/courses/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function add() {

    $this->data['inner_page'] = 'admin/courses/add';

    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();
    $this->data['course_categories'] = $this->Admin_Course_Categories_Model->get_course_categories_list();
    $this->data['abo_types'] = $this->Admin_Memberships_Model->get_abo_types_list();

    $this->form_validation->set_rules('name', 'Name', 'trim|min_length[3]|required');
    $this->form_validation->set_rules('startdate', 'Start date', 'trim|required');
    $this->form_validation->set_rules('enddate', 'End date', 'trim|required');
    $this->form_validation->set_rules('num_places', 'Num places', 'trim|numeric|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description'),
        'startdate' => ymd_from_dmy($this->input->post('startdate'), '.', '-'),
        'enddate' => ymd_from_dmy($this->input->post('enddate'), '.', '-'),
        'type' => $this->input->post('type'),
        'categoryid' => $this->input->post('category'),
        'abotype' => $this->input->post('abotype'),
        'reservation' => $this->input->post('reservation'),
        'based_on' => $this->input->post('based_on'),
        'num_places' => $this->input->post('num_places'),
        'needpartner' => $this->input->post('needpartner'),
      );

      $added = $this->Admin_Courses_Model->add($data);

      if($added) {
        $message = array('type' => 'success', 'text' => 'Course added successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/courses');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when adding.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/courses/add');
      }

    }

  }

  public function edit($id) {

    $this->data['course'] = $this->Admin_Courses_Model->get($id);

    if($this->data['course'] == false) {
      $message = array('type' => 'danger', 'text' => 'This course is no longer available.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/courses');
    }

    $this->data['inner_page'] = 'admin/courses/edit';

    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();
    $this->data['course_categories'] = $this->Admin_Course_Categories_Model->get_course_categories_list();
    $this->data['abo_types'] = $this->Admin_Memberships_Model->get_abo_types_list();

    $this->form_validation->set_rules('name', 'Name', 'trim|min_length[3]|required');
    $this->form_validation->set_rules('num_places', 'Num places', 'trim|numeric|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'name' => $this->input->post('name'),
        'description' => $this->input->post('description'),
        'categoryid' => $this->input->post('category'),
        'abotype' => $this->input->post('abotype'),
        'reservation' => $this->input->post('reservation'),
        'num_places' => $this->input->post('num_places'),
        'needpartner' => $this->input->post('needpartner'),
      );

      $edited = $this->Admin_Courses_Model->edit($id, $data);

      if($edited) {
        $message = array('type' => 'success', 'text' => 'Course edited successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/courses');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when editing.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/courses/edit/'.$id);
      }

    }

  }

  public function view($id) {
    $course = $this->Admin_Courses_Model->get($id, true);
    $this->data['course'] = $course;

    $this->data['course_persons'] = $this->Admin_Courses_Model->get_course_persons($id);
    $this->data['course_categories'] = $this->Admin_Course_Categories_Model->get_course_categories_list();
    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();
    $this->data['abo_types'] = $this->Admin_Memberships_Model->get_abo_types_list();

    $this->data['inner_page'] = 'admin/courses/view';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

}
