<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');

    $this->load->model('admin/Dashboard_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;
  }

  public function index() {

    $this->verify_login();

    $this->data['num_members'] = $this->Dashboard_Model->get_members_num();

    $this->data['num_open_messages'] = $this->Dashboard_Model->get_open_messages_total();

    $this->data['num_content_files'] = $this->Dashboard_Model->get_content_total();

    $this->data['latest_members'] = $this->Dashboard_Model->get_latest_members(7, 10);

    $this->data['latest_contents'] = $this->Dashboard_Model->get_latest_content_files(10);

    $this->load->model('admin/Users_Model');
    $this->data['latest_open_messages'] = $this->Users_Model->get_open_messages(10);

    $this->data['inner_page'] = 'admin/dashboard';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function login() {

    $this->redirect_loggedin_users();

    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/login', $this->data);
    } else {
      $input_data = array(
        'Email' => $this->input->post('email'),
        'Passwort' => $this->input->post('password')
      );

      $user = $this->Dashboard_Model->login($input_data);
      if ($user !== false) {
        $this->set_login_session($user);
        redirect('/admin');
      } else {
        $this->data['error_message'] = "Wrong email / password combination.";
        $this->load->view('admin/_layouts/login', $this->data);
      }
    }
  }

  private function set_login_session($user_data) {
    $session_data = array(
      'id' => $user_data['Teilnehmerid'],
      'email' => $user_data['Email'],
      'language' => $user_data['language'],
      'firstname' => $user_data['Vorname'],
      'lastname' => $user_data['Nachname'],
    );

    $this->session->set_userdata('admin', $session_data);
  }

  public function redirect_loggedin_users() {
    if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
      redirect('/admin');
    }
  }

  public function logout() {

    if(isset($this->session->userdata['admin'])) {
      $sess_array = array();
      $this->session->unset_userdata('admin', $sess_array);
    }

    redirect('/admin/login');
  }

}
