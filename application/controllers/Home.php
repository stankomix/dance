<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->helper('form');

    $this->load->library('form_validation');

    $this->load->helper('datetime_helper');

    $this->load->library('session');

    $this->load->model('Home_Model');

    // internationalization
    $this->load->helper('misc_helper');
    $this->language = get_site_language();
    $this->lang->load('danzare', $this->language);
    $this->config->set_item('language', $this->language);

    $this->data['languages'] = $this->conf['languages'];
  }

  public function lessons_schedule() {

    $lessons = $this->Home_Model->get_schedule_lessons();
    $this->data['lessons'] = $lessons;

    $memberships = $this->Home_Model->get_schedule_memberships();
    $this->data['memberships'] = $memberships;

    $this->form_validation->set_rules('abotype', $this->lang->line('membership')
                                      , array('trim', 'required', 'numeric'));
    $this->form_validation->set_rules('start_date', $this->lang->line('start_date')
                                      , array('trim', 'required', 'regex_match[/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/]'));
    $this->form_validation->set_rules('lesson', $this->lang->line('lesson')
                                      , array('trim', 'required', 'numeric'));

    if ($this->form_validation->run() == FALSE) {
    } else {
      $abotype = $this->input->post('abotype');
      $start_date = $this->input->post('start_date');
      $lesson_id = $this->input->post('lesson');

      $lesson = $this->Home_Model->get_lesson($lesson_id);

      if($lesson != false) {
        $_SESSION['schedule'] = array(
          'type' => 'lesson',
          'start_date' => $start_date,
          'abotype' => $abotype,
          'id' => $lesson_id,
          'data' => $lesson,
        );
        redirect('/register');
      }
    }

    $this->data['inner_page'] = 'schedule_lessons';
    $this->load->view('_layouts/login_register', $this->data);

  }

  public function courses_schedule($trial=0) {

    $courses = $this->Home_Model->get_schedule_courses(true);

    $this->data['courses'] = $courses;
    $this->data['trial'] = $trial;
    $this->data['inner_page'] = 'schedule_course';
    $this->data['conf'] = $this->conf;

    $this->load->view('_layouts/login_register', $this->data);

  }

  public function schedule_course($course_id, $trial=0) {

    $course = $this->Home_Model->get_course($course_id);

    if($course != false) {
      $_SESSION['schedule'] = array(
        'type' => 'course',
        'id' => $course_id,
        'trial' => $trial,
        'data' => $course,
      );
      redirect('/register');
    }

  }

}

?>
