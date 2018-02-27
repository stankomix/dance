<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Lessons extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');
    $this->load->helper('misc_helper');

    $this->load->model('admin/Admin_Lessons_Model');
    $this->load->model('admin/Admin_Courses_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;

    $this->verify_login();
  }

  public function index() {

    $lessons = $this->Admin_Lessons_Model->get_all_lessons();
    $this->data['lessons'] = $lessons;
    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();

    $this->data['inner_page'] = 'admin/lessons/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function add() {

    $this->data['inner_page'] = 'admin/lessons/add';

    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();

    $prepend = array('00','01','02','03','04','05','06','07','08','09');
    $this->data['hours_list'] = array_merge($prepend,range(10, 23));
    $this->data['minutes_list'] = array('00', '15', '30', '45');

    $this->form_validation->set_rules('validfrom', 'Valid from', 'trim|required');
    $this->form_validation->set_rules('validuntil', 'Valid until', 'trim|required');
    $this->form_validation->set_rules('num_places', 'Num places', 'trim|numeric|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'coursetype' => $this->input->post('coursetype'),
        'courseday' => $this->input->post('courseday'),
        'validfrom' => ymd_from_dmy($this->input->post('validfrom'), '.', '-'),
        'validuntil' => ymd_from_dmy($this->input->post('validuntil'), '.', '-'),
        'starttime' => $this->data['hours_list'][$this->input->post('starthour')] . $this->data['minutes_list'][$this->input->post('startminute')],
        'endtime' => $this->data['hours_list'][$this->input->post('endhour')] . $this->data['minutes_list'][$this->input->post('endminute')],
        'terminals' => $this->input->post('terminals'),
        'Instructor' => $this->input->post('instructor'),
        'num_places' => $this->input->post('num_places'),
        'renewal' => $this->input->post('renewal'),
        'aktiv' => $this->input->post('aktiv'),
      );

      $added = $this->Admin_Lessons_Model->add($data);

      if($added) {
        $message = array('type' => 'success', 'text' => 'Lesson added successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/lessons');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when adding.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/lessons/add');
      }

    }

  }

  public function edit($id) {

    $this->data['inner_page'] = 'admin/lessons/edit';

    $this->data['lesson'] = $this->Admin_Lessons_Model->get($id);
    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();

    $this->form_validation->set_rules('validfrom', 'Valid from', 'trim|required');
    $this->form_validation->set_rules('validuntil', 'Valid until', 'trim|required');
    $this->form_validation->set_rules('num_places', 'Num places', 'trim|numeric|required');
    $this->form_validation->set_rules('starttime', 'Start time', 'trim|numeric|min_length[3]|max_length[4]|required');
    $this->form_validation->set_rules('endtime', 'End time', 'trim|numeric|min_length[3]|max_length[4]|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'coursetype' => $this->input->post('coursetype'),
        'courseday' => $this->input->post('courseday'),
        'validfrom' => ymd_from_dmy($this->input->post('validfrom'), '.', '-'),
        'validuntil' => ymd_from_dmy($this->input->post('validuntil'), '.', '-'),
        'starttime' => $this->input->post('starttime'),
        'endtime' => $this->input->post('endtime'),
        'terminals' => $this->input->post('terminals'),
        'Instructor' => $this->input->post('instructor'),
        'num_places' => $this->input->post('num_places'),
        'renewal' => $this->input->post('renewal'),
        'aktiv' => $this->input->post('aktiv'),
      );

      $edited = $this->Admin_Lessons_Model->edit($id, $data);

      if($edited) {
        $message = array('type' => 'success', 'text' => 'Lesson edited successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/lessons');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when editing.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/lessons/edit/'.$id);
      }

    }

  }

  public function view($id) {
    $lesson = $this->Admin_Lessons_Model->get($id);
    $this->data['lesson'] = $lesson;

    $this->data['lesson_persons'] = $this->Admin_Lessons_Model->get_lesson_persons($id);
    $this->data['course_types'] = $this->Admin_Courses_Model->get_course_types();
    //$this->data['course_categories'] = $this->Admin_Course_Categories_Model->get_course_categories_list();
    //$this->data['abo_types'] = $this->Admin_Memberships_Model->get_abo_types_list();

    $this->data['inner_page'] = 'admin/lessons/view';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

}
