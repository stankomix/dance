<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Courses extends Frontend_Controller {

  public function __construct() {
    parent::__construct();

    // Load form helper library
    $this->load->helper('form');

    $this->load->helper('datetime_helper');


    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

    // Only logged users allowed
    $this->verify_login();

    // Load database
    $this->load->model('Courses_Model');

    // internationalization
    $this->load->helper('misc_helper');
    $language = get_site_language();
    $this->lang->load('danzare', $language);
    $this->config->set_item('language', $language);

  }

  public function index() {
    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'courses/courses';
    $data['conf'] = $this->conf;

    $courses = $this->Courses_Model->get_available_courses($this->session->userdata['logged_in']['id'], true);
    $data['courses'] = $courses;

    $this->load->view('_layouts/frontend', $data);
  }

  public function course_enroll($course_id) {

    $course = $this->Courses_Model->get($course_id);

    $membership = $this->Courses_Model->has_membership_of_coursetype($this->session->userdata['logged_in']['id'], $course['type']);
    if($course !== false && $membership !== false) {

      $enrollment = $this->Courses_Model->course_enroll($this->session->userdata['logged_in']['id'], $course_id);

      if($enrollment['return']) {
        $message = array('type' => 'success', 'text' => $this->lang->line('course_enroll_success_msg'));
        if($enrollment['waiting'] == '1') {
          $message['text'] .= ' ' . $this->lang->line('waiting_msg');
        }
      } else {
        $message = array('type' => 'error', 'text' => $this->lang->line('course_enroll_error_msg'));
      }

    } else {
      $message = array('type' => 'error', 'text' => $this->lang->line('course_enroll_error_msg'));
    }

    $this->session->set_flashdata('flash_message', $message);
    redirect('/members/memberships/courses');
  }

  public function course_disenroll($course_id) {
    $disenrollment = $this->Courses_Model->course_disenroll($this->session->userdata['logged_in']['id'], $course_id);

    if($disenrollment) {

      $waiting_person = $this->Courses_Model->get_waiting_person($course_id);

      // we enroll the next waiting person
      if($waiting_person !== false) {
        $this->Courses_Model->unwait_person($waiting_person['person'], $course_id);
      }

      $message = array('type' => 'success', 'text' => $this->lang->line('course_disenroll_success_msg'));
      $this->session->set_flashdata('flash_message', $message);
    } else {
      $message = array('type' => 'error', 'text' => $this->lang->line('course_disenroll_error_msg'));
      $this->session->set_flashdata('flash_message', $message);
    }

    redirect('/members/memberships/courses');
  }

} // end of the class

?>
