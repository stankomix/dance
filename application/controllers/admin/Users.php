<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');
    $this->load->helper('misc_helper');

    $this->load->model('admin/Users_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;

    $this->verify_login();
  }

  public function index() {

    if(!empty($_POST) && isset($_POST['usersearch']) && !empty($_POST['usersearch'])) {
      $this->data['is_search'] = true;
      $this->data['usersearch'] = $_POST['usersearch'];
      $this->data['title'] = 'Search results: '. $_POST['usersearch'];
      $users = $this->Users_Model->search($_POST['usersearch']);
    } else {
      $this->data['is_search'] = false;
      $this->data['usersearch'] = '';
      $this->data['title'] = 'Users';

      $this->load->library('pagination');

      $total_rows = $this->Users_Model->get_total();

      $p_conf = $this->conf['admin_pagination_conf'];
      $p_conf['base_url'] = base_url() . 'admin/users';
      $p_conf['total_rows'] = $total_rows;
      $p_conf['per_page'] = 12;

      $page = ($this->uri->segment($p_conf['uri_segment'])) ? $this->uri->segment($p_conf['uri_segment']) : 0;

      $users = $this->Users_Model->get_all($p_conf['per_page'], $page);

      $this->pagination->initialize($p_conf);

      $this->data['pagination_links'] = $this->pagination->create_links();

    }

    $this->data['users'] = $users;

    $this->data['inner_page'] = 'admin/users/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function view($Teilnehmerid) {
    $user = $this->Users_Model->get($Teilnehmerid);
    $this->data['user'] = $user;

    $this->form_validation->set_rules('usermessage', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
    } else {

      $parentid = $this->input->post('parentid') ? $this->input->post('parentid') : 0;
      $status = $parentid == 0 ? 1 : 0;

      $data = array(
        'parentid' => $parentid,
        'person' => $Teilnehmerid,
        'created_by' => $_SESSION['admin']['id'],
        'created_at' => date('Y-m-d H:i:s', time()),
        'status' => $status,
        'message' => $this->input->post('usermessage'),
      );

      $added = $this->Users_Model->add_user_message($data);

      if($added) {
        $message = array('type' => 'success', 'text' => 'Message added successfully.');
        $this->session->set_flashdata('flash_message', $message);
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when adding the message.');
        $this->session->set_flashdata('flash_message', $message);
      }
      redirect('/admin/users/view/'.$Teilnehmerid);

    }

    $this->load->model('admin/Admin_Memberships_Model');
    $user_memberships = $this->Admin_Memberships_Model->get_user_memberships($Teilnehmerid);
    $this->data['user_memberships'] = $user_memberships;

    $this->load->model('admin/Admin_Courses_Model');
    $user_courses = $this->Admin_Courses_Model->get_enrolled_courses($Teilnehmerid);
    $this->data['user_courses'] = $user_courses;

    $this->load->model('admin/Admin_Lessons_Model');
    $user_lessons = $this->Admin_Lessons_Model->get_enrolled_lessons($Teilnehmerid);
    $this->data['user_lessons'] = $user_lessons;

    $this->load->model('admin/Admin_Content_Model');
    $user_contents = $this->Admin_Content_Model->get_user_content_list($Teilnehmerid);
    $this->data['user_contents'] = $user_contents;

    $user_messages = $this->Users_Model->get_user_messages($Teilnehmerid, 0);
    foreach($user_messages as $key => $message) {
      $user_messages[$key]['answers'] = $this->Users_Model->get_user_messages($Teilnehmerid, $message['id']);
    }
    $this->data['user_messages'] = $user_messages;

    $this->data['inner_page'] = 'admin/users/view';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function edit($Teilnehmerid) {
    $user = $this->Users_Model->get($Teilnehmerid);
    $this->data['user'] = $user;

    $this->form_validation->set_rules('usertype', 'Member type', 'trim|numeric|required');

    if ($this->form_validation->run() == FALSE) {
      //
    } else {

      $data = array(
        'Bemerkung' => $this->input->post('Bemerkung'),
        'usertype' => $this->input->post('usertype'),
      );

      $this->Users_Model->edit($Teilnehmerid, $data);

      $message = array('type' => 'success', 'text' => 'Member was successfully edited.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/users/view/'.$Teilnehmerid);
    }

    $this->data['inner_page'] = 'admin/users/edit';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function messages() {

    if(!empty($_POST) && isset($_POST['messagesearch']) && !empty($_POST['messagesearch'])) {
      $this->data['is_search'] = true;
      $this->data['messagesearch'] = $_POST['messagesearch'];
      $this->data['title'] = 'Users messages search results: '. $_POST['messagesearch'];
      $messages = $this->Users_Model->search_messages($_POST['messagesearch']);
    } else {
      $this->data['is_search'] = false;
      $this->data['messagesearch'] = '';
      $this->data['title'] = 'Member messages';

      $this->load->library('pagination');

      $total_rows = $this->Users_Model->get_messages_total();

      $p_conf = $this->conf['admin_pagination_conf'];
      $p_conf['base_url'] = base_url() . 'admin/users/messages';
      $p_conf['total_rows'] = $total_rows;
      $p_conf['per_page'] = 10;
      $p_conf['uri_segment'] = 4;

      $page = ($this->uri->segment($p_conf['uri_segment'])) ? $this->uri->segment($p_conf['uri_segment']) : 0;

      $messages = $this->Users_Model->get_all_messages($p_conf['per_page'], $page);

      $this->pagination->initialize($p_conf);

      $this->data['pagination_links'] = $this->pagination->create_links();

    }

    $this->data['messages'] = $messages;

    $this->data['inner_page'] = 'admin/users/messages';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function open_messages() {
    $messages = $this->Users_Model->get_open_messages();
    $this->data['messages'] = $messages;

    $this->data['inner_page'] = 'admin/users/open_messages';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function set_message_status($id, $status) {

    if(is_numeric($id) && is_numeric($status)) {

      $data = array(
        'updated_by' => $this->data['userdata']['id'],
        'status' => $status,
      );

      $updated = $this->Users_Model->set_message_status($id, $data);

      if($updated == false) {
        $message = array('type' => 'danger', 'text' => 'There was a problem with the status change.');
        $this->session->set_flashdata('flash_message', $message);
      } else {
        $message = array('type' => 'success', 'text' => 'The status for the member message has been changed.');
        $this->session->set_flashdata('flash_message', $message);
      }

      redirect('/admin/users/messages');
    }

    redirect('/admin/users/messages');
  }

}
