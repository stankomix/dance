<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Members extends Frontend_Controller {

  public function __construct() {
    parent::__construct();

    // Load form helper library
    $this->load->helper('form');

    // Load form validation library
    $this->load->library('form_validation');

    // Load session library
    $this->load->library('session');

    // Only logged users allowed
    $this->verify_login();

    // Load database
    $this->load->model('Members_Model');

    // internationalization
    $this->load->helper('misc_helper');
    $language = get_site_language();
    $this->lang->load('danzare', $language);
    $this->config->set_item('language', $language);
  }

  public function index() {

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'members/admin_page';

    $this->load->view('_layouts/frontend', $data);

  }

  public function messages() {

    $this->load->helper('datetime_helper');

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'members/messages';
    $data['conf'] = $this->conf;

    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      //
    } else {
      $message = $this->input->post('message');

      $data = array(
        'person' => $this->session->userdata['logged_in']['id'],
        'created_by' => $this->session->userdata['logged_in']['id'],
        'created_at' => date('Y-m-d H:i:s', time()),
        'status' => '1',
        'message' => $message,
      );

      $this->Members_Model->add_user_message($data);

      $message = array('type' => 'success', 'text' => 'Message was added successfully.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members/messages');
    }

    $data['user_messages'] = $this->Members_Model->get_user_messages($this->session->userdata['logged_in']['id']);

    $this->load->view('_layouts/frontend', $data);

  }

  public function close_message($id) {

    $message = $this->Members_Model->get_message($id);

    if($message != false) {

      if($message['person'] == $this->session->userdata['logged_in']['id']
        && $message['created_by'] == $this->session->userdata['logged_in']['id']
        ) {

          $this->Members_Model->close_message($message['id']);

          $message = array('type' => 'success', 'text' => 'The status of the message was changed successfully.');
          $this->session->set_flashdata('flash_message', $message);

      } else {
        $message = array('type' => 'error', 'text' => 'You cannot change the status of that message.');
        $this->session->set_flashdata('flash_message', $message);
      }

    } else {
      $message = array('type' => 'error', 'text' => 'Message was  not found.');
      $this->session->set_flashdata('flash_message', $message);
    }

    redirect('/members/messages');

  }

  public function change_password() {
    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'members/change_password';

    $this->form_validation->set_rules('Passwort', $this->lang->line('new_pass'), 'trim|required|min_length[5]|max_length[22]');
    $this->form_validation->set_rules('Passwort2', $this->lang->line('repeat_pass'), 'trim|required|matches[Passwort]');

    if ($this->form_validation->run() == FALSE) {
      //
    } else {
      $Passwort = $this->input->post('Passwort');

      $data = array(
        'Passwort' => password_hash($Passwort, PASSWORD_BCRYPT),
      );

      $this->Members_Model->change_password($this->session->userdata['logged_in']['id'], $data);

      $message = array('type' => 'success', 'text' => $this->lang->line('pass_change_success'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members');
    }

    $this->load->view('_layouts/frontend', $data);
  }

  public function change_language() {

    $this->config->load('danzare');
    $conf = $this->config->item('danzare');

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'members/change_language';
    $data['languages'] = $conf['languages'];

    $this->form_validation->set_rules('language', $this->lang->line('select_language'), 'trim|required|alpha');

    if ($this->form_validation->run() == FALSE) {
      //
    } else {
      $language = $this->input->post('language');

      $data = array(
        'language' => $language,
      );

      $this->Members_Model->change_language($this->session->userdata['logged_in']['id'], $data);

      $this->refresh_logged_user();
      $this->lang->load('danzare', $language);

      $message = array('type' => 'success', 'text' => $this->lang->line('lang_change_success'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members');
    }

    $this->load->view('_layouts/frontend', $data);
  }

  public function refresh_logged_user() {
    $this->load->model('Login_Database');

    $logged_user = $this->Login_Database->read_user_information($this->session->userdata['logged_in']['email']);

    if($logged_user !== false) {
      $session_data = array(
        'id' => $logged_user['Teilnehmerid'],
        'email' => $logged_user['Email'],
        'language' => $logged_user['language'],
      );

      // Add user data in session
      $this->session->set_userdata('logged_in', $session_data);
    }
  }

} // end of the class

?>
