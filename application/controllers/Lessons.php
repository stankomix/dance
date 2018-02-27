<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Lessons extends Frontend_Controller {

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

    $this->load->model('Lessons_Model');

    // internationalization
    $this->load->helper('misc_helper');
    $language = get_site_language();
    $this->lang->load('danzare', $language);
    $this->config->set_item('language', $language);

  }

  public function index() {
    redirect('/lessons/lessons');
  }

  public function lessons() {
    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'lessons/lessons';

    $this->config->load('danzare');
    $conf = $this->config->item('danzare');
    $data['conf'] = $conf;

    $lessons = $this->Lessons_Model->get_available_lessons($this->session->userdata['logged_in']['id'], true);
    $data['lessons'] = $lessons;

    $this->load->view('_layouts/frontend', $data);
  }

  public function lesson_enroll($lesson_id) {
    $enrollment = $this->Lessons_Model->lesson_enroll($this->session->userdata['logged_in']['id'], $lesson_id);

    if($enrollment['return']) {
      $message = array('type' => 'success', 'text' => $this->lang->line('lesson_enroll_success_msg'));
      if($enrollment['waiting'] == '1') {
        $message['text'] .= ' ' . $this->lang->line('waiting_msg');
      }
      $this->session->set_flashdata('flash_message', $message);
    } else {
      $message = array('type' => 'error', 'text' => $this->lang->line('lesson_enroll_error_msg'));
      $this->session->set_flashdata('flash_message', $message);
    }

    redirect('/members/memberships/lessons');
  }

  public function lesson_disenroll($lesson_id) {
    $disenrollment = $this->Lessons_Model->lesson_disenroll($this->session->userdata['logged_in']['id'], $lesson_id);

    if($disenrollment) {

      $waiting_person = $this->Lessons_Model->get_waiting_person($lesson_id);

      // we enroll the next waiting person
      if($waiting_person !== false) {
        $this->Lessons_Model->unwait_person($waiting_person['kursteilnehmerid'], $lesson_id);
      }

      $message = array('type' => 'success', 'text' => $this->lang->line('lesson_disenroll_success_msg'));
      $this->session->set_flashdata('flash_message', $message);
    } else {
      $message = array('type' => 'error', 'text' => $this->lang->line('lesson_disenroll_error_msg'));
      $this->session->set_flashdata('flash_message', $message);
    }

    redirect('/members/memberships/lessons');
  }

} // end of the class

?>
