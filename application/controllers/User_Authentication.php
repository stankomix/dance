<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Authentication extends Frontend_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->helper('form');

    $this->load->helper('datetime_helper');

    $this->load->library('form_validation');

    $this->load->library('session');

    $this->load->model('Login_Database');

    // internationalization
    $this->load->helper('misc_helper');
    $this->language = get_site_language();
    $this->lang->load('danzare', $this->language);
    $this->config->set_item('language', $this->language);

    $this->config->load('danzare');
    $conf = $this->config->item('danzare');

    $this->data = array();
    $this->data['languages'] = $conf['languages'];
  }

  // Show login page
  public function index() {

    $this->redirect_loggedin_users();

    $data = array(
      'inner_page' => 'login_form',
      'languages' => $this->data['languages']
    );
    $this->load->view('_layouts/login_register', $data);
  }

  public function register() {

    $this->redirect_loggedin_users();

    // Check validation for user input in SignUp form
    $this->form_validation->set_rules('Anrede', $this->lang->line('salutation'), 'trim|alpha_dash|required');
    $this->form_validation->set_rules('Vorname', $this->lang->line('first_name'), 'trim|min_length[3]|required');
    $this->form_validation->set_rules('Nachname', $this->lang->line('last_name'), 'trim|min_length[3]|required');
    $this->form_validation->set_rules('Persontyp'
                                      , $this->lang->line('person_type')
                                      , 'trim|is_natural_no_zero|required'
                                      , array('is_natural_no_zero' => $this->lang->line('select_person_type_msg'))
                                    );
    $this->form_validation->set_rules('Email', $this->lang->line('email'), 'trim|valid_email|required');
    $this->form_validation->set_rules('Strasse', $this->lang->line('street'), 'trim|required');
    $this->form_validation->set_rules('Ort', $this->lang->line('city'), 'trim|required');
    $this->form_validation->set_rules('PLZ', $this->lang->line('postal_code'), 'trim|numeric|min_length[4]|max_length[6]|required');
    $this->form_validation->set_rules('Mobiltelefon', $this->lang->line('mobile'), 'trim|required');
    $this->form_validation->set_rules('Geburtsdatum', $this->lang->line('birth_date'), array('trim', 'required', 'regex_match[/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/]'));

    $this->load->model('Members_Model');
    $persontypes = $this->Members_Model->get_person_types();
    $persontypes = array('') + $persontypes;

    $schedule = false;
    if(isset($_SESSION['schedule']) && !empty($_SESSION['schedule'])) {
      $schedule = $_SESSION['schedule'];
    }

    $data = array(
      'inner_page' => 'registration_form',
      'languages' => $this->data['languages'],
      'persontypes' => $persontypes,
      'schedule' => $schedule,
    );
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('_layouts/login_register', $data);
    } else {

      $default_password = $this->generatePassword();

      $input_data = array(
        'Anrede' => $this->input->post('Anrede'),
        'Vorname' => $this->input->post('Vorname'),
        'Nachname' => $this->input->post('Nachname'),
        'Persontyp' => $this->input->post('Persontyp'),
        'Email' => $this->input->post('Email'),
        'Strasse' => $this->input->post('Strasse'),
        'Ort' => $this->input->post('Ort'),
        'PLZ' => $this->input->post('PLZ'),
        'Mobiltelefon' => $this->input->post('Mobiltelefon'),
        'Geburtsdatum' => date("Y-m-d H:i:s", date_to_timestamp($this->input->post('Geburtsdatum'), '.')),
        'Passwort' => password_hash($default_password, PASSWORD_BCRYPT),
        'language' => $this->language,
        'Startam' => date('Y-m-d H:i:s', time()),
      );

      $result = $this->Login_Database->registration_insert($input_data);

      if ($result == TRUE) {
        $this->load->library('email');
        $this->email->mailtype = 'html';

        $data['default_password'] = $default_password;
        $email_template = $this->load->view('mails/'.$this->language.'/register', $data, TRUE);

        $this->email->from('info@danzare.ch', 'Danzare');
        $this->email->to($input_data['Email']);
        $this->email->bcc('info@danzare.ch');

        $this->email->subject($this->lang->line('welcome_msg'));
        $this->email->message($email_template);

        $this->email->send();

        $message = array('type' => 'success', 'text' => $this->lang->line('registration_successful_msg'));


        $newuser = $this->Login_Database->read_user_information($input_data['Email']);
        if($newuser !== false) {

          if($schedule != false) {
            $this->load->model('Memberships_Model');

            switch($schedule['type']) {
              case 'lesson':

                $abotype_data = $this->Memberships_Model->get_abo_type($schedule['abotype']);

                $start_date_unix = date_to_timestamp($schedule['start_date'], '.');
                $end_date_unix = $start_date_unix + 60*60*24 * $abotype_data['abodays'];
                $validFrom = date('Y-m-d 00:00:00', $start_date_unix);
                $validUntil = date('Y-m-d 00:00:00', $end_date_unix);

                $data = array(
                  'Kursteilnehmerid' => $newuser['Teilnehmerid'],
                  'abotype' => $schedule['abotype'],
                  'coursetype' => $schedule['data']['coursetype'],
                  'validFrom' => $validFrom,
                  'validUntil' => $validUntil,
                  'erfasstam' => date('Y-m-d H:i:s', time()),
                  'lessontype' => '1',
                  'renewal' => '1',
                );

                $this->Memberships_Model->add_membership($data);

                // add trial lesson
                $this->load->model('Lessons_Model');
                $enrollment = $this->Lessons_Model->lesson_enroll($newuser['Teilnehmerid'], $schedule['id'], 1);
                if($enrollment['waiting'] == '1') {
                  $message['text'] .= ' ' . $this->lang->line('waiting_msg');
                }

              break;
              case 'course':

                $data = array(
                  'Kursteilnehmerid' => $newuser['Teilnehmerid'],
                  'abotype' => $schedule['data']['abotype'],
                  'coursetype' => $schedule['data']['type'],
                  'validFrom' => $schedule['data']['startdate'],
                  'validUntil' => $schedule['data']['enddate'],
                  'erfasstam' => date('Y-m-d H:i:s', time()),
                  'lessontype' => '1',
                  'renewal' => '1',
                  'trial' => $schedule['trial'],
                );

                $this->Memberships_Model->add_membership($data);

                $this->load->model('Courses_Model');
                $enrollment = $this->Courses_Model->course_enroll($newuser['Teilnehmerid'], $schedule['data']['id'], $schedule['trial']);
                if($enrollment['waiting'] == '1') {
                  $message['text'] .= ' ' . $this->lang->line('waiting_msg');
                }

              break;
            }

            if(isset($schedule['trial']) && $schedule['trial'] == 1) {
              $redirect = '/members/memberships/confirmation';
            } else {
              $redirect = '/members/memberships/payment';
            }

          } else {
            $redirect = '/members/memberships';
          }

          // automatically login user
          $this->set_login_session($newuser);

          $this->session->set_flashdata('flash_message', $message);

          redirect($redirect);
        }

      } else {
        $data['message_display'] = $this->lang->line('email_exists_msg');
        $data['inner_page'] = 'registration_form';
      }
      $this->load->view('_layouts/login_register', $data);
    }
  }

  // Check for user login process
  public function user_login_process() {

    $this->redirect_loggedin_users();

    $this->form_validation->set_rules('Email', $this->lang->line('email'), 'trim|valid_email|required');
    $this->form_validation->set_rules('Passwort', $this->lang->line('password'), 'trim|required');

    $data = array();
    $data['inner_page'] = 'login_form';
    $data['languages'] = $this->data['languages'];

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('_layouts/login_register', $data);
    } else {
      $input_data = array(
        'Email' => $this->input->post('Email'),
        'Passwort' => $this->input->post('Passwort')
      );

      $result = $this->Login_Database->login($input_data);
      if ($result == TRUE) {

        $email = $this->input->post('Email');
        $result = $this->Login_Database->read_user_information($email);
        if ($result != false) {

          $this->set_login_session($result);

          redirect('/members/memberships');
        }
      } else {
        $data['error_message'] = $this->lang->line('invalid_login');
        $this->load->view('_layouts/login_register', $data);
      }
    }
  }

  public function login_with_code($login_code, $route='') {

    if(!empty($login_code)) {
      $check_user = $this->Login_Database->login_with_code($login_code);

      $redirect = !empty($route) ? str_replace('--', '/',$route) : '/members/memberships';
      $data = array();
      if($check_user === false) {
        $message = array('type' => 'error', 'text' => $this->lang->line('bad_login_code'));
        $this->session->set_flashdata('flash_message', $message);
        $redirect = '/login';
      } else {
        $message = array('type' => 'success', 'text' => $this->lang->line('logged_in_msg'));
        $this->session->set_flashdata('flash_message', $message);

        $this->set_login_session($check_user);
      }

      redirect($redirect);
    }
  }

  public function forgot_password() {
    $this->redirect_loggedin_users();

    $this->form_validation->set_rules('Email', $this->lang->line('email'), 'trim|required');

    $data = array();
    $data['inner_page'] = 'forgot_form';
    $data['languages'] = $this->data['languages'];

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('_layouts/login_register', $data);
    } else {

      $email = $this->input->post('Email');

      $check_data = $this->Login_Database->read_user_information($email);

      if($check_data !== false) {
        $this->load->library('email');
        $this->email->mailtype = 'html';

        $login_code = sha1($check_data['Email'] . time());
        $login_code_data = array(
          'login_code' => $login_code,
          'login_code_time' => time()+60*60*24*30,
        );

        $this->Login_Database->update_login_code($check_data['Teilnehmerid'], $login_code_data);

        $check_data['new_login_code'] = $login_code;
        $email_template = $this->load->view('mails/'.$check_data['language'].'/forgot_password', $check_data, TRUE);

        $this->email->from('info@danzare.ch', 'Danzare');
        $this->email->to($check_data['Email']);

        $this->email->subject($this->lang->line('reset_pass_subject'));
        $this->email->message($email_template);

        $this->email->send();
        //$this->email->send(FALSE);
        //die($this->email->print_debugger());

        $data['message_display'] = $this->lang->line('forgot_success_msg');
      } else {
        $data['message_display'] = $this->lang->line('forgot_no_account_msg');
      }

      $this->load->view('_layouts/login_register', $data);
    }
  }

  // Logout from admin page
  public function logout() {

    // Removing session data
    if(isset($this->session->userdata['logged_in'])) {
      $sess_array = array();
      $this->session->unset_userdata('logged_in', $sess_array);
      $data['message_display'] = $this->lang->line('logged_out_msg');
    }

    redirect('/login');
  }

  public function redirect_loggedin_users() {
    if(isset($this->session->userdata['logged_in'])){
      redirect('/members');
    }
  }

  public function generatePassword() {
    $length = 8;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }

  private function set_login_session($user_data) {
    $session_data = array(
      'id' => $user_data['Teilnehmerid'],
      'email' => $user_data['Email'],
      'language' => $user_data['language'],
    );

    // Add user data in session
    $this->session->set_userdata('logged_in', $session_data);
  }

  public function change_language() {
    $language = $this->input->post('data');

    if(isset($this->data['languages'][$language])) {
      $_SESSION['language'] = $language;
    }

    die();
  }

}

?>
