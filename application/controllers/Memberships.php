<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Memberships extends Frontend_Controller {

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

    $this->load->model('Memberships_Model');

    // internationalization
    $this->load->helper('misc_helper');
    $language = get_site_language();
    $this->lang->load('danzare', $language);
    $this->config->set_item('language', $language);

  }

  public function index() {

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'memberships/main';

    $this->config->load('danzare');
    $conf = $this->config->item('danzare');
    $data['conf'] = $conf;

    $user_memberships = $this->Memberships_Model->get_user_memberships($this->session->userdata['logged_in']['id']);
    $data['user_memberships'] = $user_memberships;

    $this->load->model('Lessons_Model');
    $lessons = $this->Lessons_Model->get_enrolled_lessons($this->session->userdata['logged_in']['id'], true);
    $data['lessons'] = $lessons;

    $this->load->model('Courses_Model');
    $courses = $this->Courses_Model->get_enrolled_courses($this->session->userdata['logged_in']['id'], true);
    $data['courses'] = $courses;

    $this->load->view('_layouts/frontend', $data);
  }

  public function assistant() {

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'memberships/assistant';

    if(!isset($this->session->userdata['assistant']['page'])) {
      $this->session->set_userdata('assistant', array('page' => 1));
    }
    $data['page'] = $this->session->userdata['assistant']['page'];

    $course_types = $this->Memberships_Model->get_course_types();
    $course_types = array($this->lang->line('select_course_type')) + $course_types;
    $data['course_types'] = $course_types;

    $this->load->model('Courses_Model');

    switch($data['page']) {
      case 1:
        $this->form_validation->set_rules('course_type', $this->lang->line('course_type')
                                          , array('trim', 'required', 'is_natural_no_zero')
                                          , array('is_natural_no_zero' => $this->lang->line('select_course_type_msg'))
                                          );
        $this->form_validation->set_rules('abo_type', $this->lang->line('select_product')
                                          , array('trim', 'required', 'alpha_dash')
                                          , array('alpha_dash' => $this->lang->line('select_product_msg'))
                                          );

        if ($this->form_validation->run() == FALSE) {
        } else {
          $course_type = $this->input->post('course_type');
          $abo_type = $this->input->post('abo_type');

          $abo_type_a = explode('_', $abo_type);
          if(!isset($abo_type_a[1])) {
            $message = array('type' => 'error', 'text' => 'Error occured.');
            $this->session->set_flashdata('flash_message', $message);
            redirect('/members/memberships/assistant');
          }

          $based_on = $abo_type_a[0];
          $based_on_id = $abo_type_a[1];

          if($based_on == 'abo') {
            $abotype_data = $this->Memberships_Model->get_abo_type($based_on_id);

            if($abotype_data === false) {
              $message = array('type' => 'error', 'text' => $this->lang->line('selected_abo_unavailable'));
              $this->session->set_flashdata('flash_message', $message);
              redirect('/members/memberships/assistant');
            }

            $_SESSION['assistant']['course_type'] = $course_type;
            $_SESSION['assistant']['abo_type'] = $based_on_id;

            if($abotype_data['based_on'] == 1) { // course
              $_SESSION['assistant']['page'] = 2;
            } else { // 2: lessons
              $_SESSION['assistant']['page'] = 3;
            }
            redirect('/members/memberships/assistant');

          }/* else { // course
            $course_db = $this->Courses_Model->get($based_on_id);
            $abotype_data = $this->Memberships_Model->get_course_based_abo_type($course_type);

            if($abotype_data === false) {
              $message = array('type' => 'error', 'text' => 'There is no course based membership for the selected course type.');
              $this->session->set_flashdata('flash_message', $message);
              redirect('/members/memberships/assistant');
            }

            $abo_days = $abotype_data['abodays'];

            $end_date_unix = $start_date_unix + 60*60*24 * $abo_days;

            $_SESSION['assistant']['course_type'] = $course_type;
            $_SESSION['assistant']['abo_type'] = $abotype_data['abotype'];

            $_SESSION['assistant']['validFrom'] = date('Y-m-d 00:00:00', $start_date_unix);
            $_SESSION['assistant']['validUntil'] = date('Y-m-d 00:00:00', $end_date_unix);

            $this->assistant_add_membership($_SESSION['assistant']);

            $this->Courses_Model->course_enroll($this->session->userdata['logged_in']['id'], $based_on_id);
            $success_message = $this->lang->line('membership_course_added_msg');

            $_SESSION['assistant'] = array();

            $message = array('type' => 'success', 'text' => $success_message);
            $this->session->set_flashdata('flash_message', $message);

            redirect('/members/memberships/payment');

          }
          */

        }
      break;

      case 2:
        $courses_list = $this->Memberships_Model->get_courses_list($_SESSION['assistant']['course_type']);
        $courses_list = array($this->lang->line('select_course')) + $courses_list;
        $data['courses_list'] = $courses_list;

        $this->form_validation->set_rules('start_date', $this->lang->line('start_date')
                                          , array('trim', 'required')
                                          );
        $this->form_validation->set_rules('course', $this->lang->line('course')
                                          , array('trim', 'required', 'is_natural_no_zero')
                                          , array('is_natural_no_zero' => $this->lang->line('select_course_msg'))
                                          );
        if($this->input->post('back') == 1) {
          unset($_SESSION['assistant']['course_type']);
          unset($_SESSION['assistant']['abo_type']);
          unset($_SESSION['assistant']['course']);
          $_SESSION['assistant']['page'] = 1;
          redirect('/members/memberships/assistant');
        } elseif ($this->form_validation->run() == FALSE) {
        } else {
          $course = $this->input->post('course');
          $_SESSION['assistant']['course'] = $course;

          $course_db = $this->Courses_Model->get($course);

          $start_date = $this->input->post('start_date');
          $start_date_unix = date_to_timestamp($start_date, '.');

          if($start_date_unix === FALSE || $start_date_unix < time()-24*60*60) {
            $message = array('type' => 'error', 'text' => $this->lang->line('select_later_valid_date'));
            $this->session->set_flashdata('flash_message', $message);
            redirect('/members/memberships/assistant');
          }

          $abotype_data = $this->Memberships_Model->get_abo_type($_SESSION['assistant']['abo_type']);
          $end_date_unix = $start_date_unix + 60*60*24 * $abotype_data['abodays'];
          $_SESSION['assistant']['validFrom'] = date('Y-m-d 00:00:00', $start_date_unix);
          $_SESSION['assistant']['validUntil'] = date('Y-m-d 00:00:00', $end_date_unix);

          $add_membership = true;
          $enroll_course = true;
          $go_to_three = false;
          /*
          switch($course_db['based_on']) {
            case 1: // course based only
              $add_membership = true;
              $enroll_course = true;
            break;

            case 2: // lessons based only
              if($this->input->post('submit') == 1) {
                $add_membership = true;
              } else {
                $go_to_three = true;
              }
            break;

            case 3: // courses or lessons
              $course_lesson_option = $this->input->post('course-lesson');
              if($course_lesson_option == 'course') {
                $add_membership = true;
                $enroll_course = true;
              } else {
                if($this->input->post('submit') == 1) {
                  $add_membership = true;
                } else {
                  $go_to_three = true;
                }
              }
            break;
          }
          */
          if($add_membership) {

            $this->assistant_add_membership($_SESSION['assistant']);
            $success_message = $this->lang->line('membership_added_msg');

            if($enroll_course) {
              $enrollment = $this->Courses_Model->course_enroll($this->session->userdata['logged_in']['id'], $course_db['id']);

              $success_message = $this->lang->line('membership_course_added_msg');

              if($enrollment['waiting'] == '1') {
                $success_message  .= ' ' . $this->lang->line('waiting_msg');
              }
            }

            $_SESSION['assistant'] = array();

            $message = array('type' => 'success', 'text' => $success_message);
            $this->session->set_flashdata('flash_message', $message);

            redirect('/members/memberships/payment');

          } elseif($go_to_three) {

            $_SESSION['assistant']['page'] = 3;
            redirect('/members/memberships/assistant');

          }

        }

      break;

      case 3:
        $this->load->model('Lessons_Model');
        $lessons_list = $this->Lessons_Model->get_available_lessons($this->session->userdata['logged_in']['id'], true, $_SESSION['assistant']['course_type']);
        $data['lessons_list'] = $lessons_list;

        $this->form_validation->set_rules('start_date', $this->lang->line('start_date')
                                          , array('trim', 'required')
                                          );
        $this->form_validation->set_rules('lessons[]', $this->lang->line('lessons')
                                          , array('trim', 'required', 'is_natural_no_zero')
                                          , array(
                                                  'required' => $this->lang->line('select_lessons_msg'),
                                                  'is_natural_no_zero' => $this->lang->line('select_lessons_msg')
                                                  )
                                          );
        if($this->input->post('back') == 1) {

          unset($_SESSION['assistant']['course']);
          $_SESSION['assistant']['page'] = 1;
          redirect('/members/memberships/assistant');

        } elseif ($this->form_validation->run() == FALSE) {
        } else {
          $start_date = $this->input->post('start_date');
          $start_date_unix = date_to_timestamp($start_date, '.');

          if($start_date_unix === FALSE || $start_date_unix < time()-24*60*60) {
            $message = array('type' => 'error', 'text' => $this->lang->line('select_later_valid_date'));
            $this->session->set_flashdata('flash_message', $message);
            redirect('/members/memberships/assistant');
          }

          $abotype_data = $this->Memberships_Model->get_abo_type($_SESSION['assistant']['abo_type']);
          $end_date_unix = $start_date_unix + 60*60*24 * $abotype_data['abodays'];
          $_SESSION['assistant']['validFrom'] = date('Y-m-d 00:00:00', $start_date_unix);
          $_SESSION['assistant']['validUntil'] = date('Y-m-d 00:00:00', $end_date_unix);

          if($this->input->post('membership-only') == 1) {
            $this->assistant_add_membership($_SESSION['assistant']);
            $_SESSION['assistant'] = array();

            $message = array('type' => 'success', 'text' => $this->lang->line('membership_added_msg'));
            $this->session->set_flashdata('flash_message', $message);

            redirect('/members/memberships/payment');

          } else {
            $this->assistant_add_membership($_SESSION['assistant']);

            $picked_lessons = $this->input->post('lessons[]');

            foreach($picked_lessons as $k => $lesson_id) {
              $this->Lessons_Model->lesson_enroll($this->session->userdata['logged_in']['id'], $lesson_id);
            }

            $_SESSION['assistant'] = array();

            $message = array('type' => 'success', 'text' => $this->lang->line('membership_lessons_added_msg'));
            $this->session->set_flashdata('flash_message', $message);

            redirect('/members/memberships/payment');
          }
        }
      break;
    }

    $this->load->view('_layouts/frontend', $data);

  }

  public function get_assistant_abo_list() {
    $data = $this->input->post('data');
    if(is_numeric($data)) {

      $abo_types = $this->Memberships_Model->get_abo_types($data, 'abo_', FALSE);

      //$courses_list = $this->Memberships_Model->get_courses_based_list($data, 'course_');
      //$abo_types = $abo_types + $courses_list;

      //$abo_types = array($this->lang->line('select_abo_type')) + $abo_types;

      $returndata = array(
        'abo_types' => $this->load->view('_partials/assistant/abo_list', array('abo_types' => $abo_types), TRUE),
        //'courses_list' => $this->load->view('_partials/assistant/course_list', array('courses_list' => $courses_list), TRUE),
      );

      echo json_encode($returndata);
    }
    exit();
  }

  public function get_assistant_course_based_on() {
    $data = $this->input->post('data');
    if(is_numeric($data)) {
      $this->load->model('Courses_Model');
      $course_db = $this->Courses_Model->get($data);

      if($course_db !== false) {
        echo $course_db['based_on'];
      }
    }
    exit();
  }

  protected function assistant_add_membership($session_data) {

    $data = array(
      'Kursteilnehmerid' => $this->session->userdata['logged_in']['id'],
      'abotype' => $session_data['abo_type'],
      'coursetype' => $session_data['course_type'],
      'validFrom' => $session_data['validFrom'],
      'validUntil' => $session_data['validUntil'],
      'erfasstam' => date('Y-m-d H:i:s', time()),
      'lessontype' => '1',
      'renewal' => '1',
    );

    $added = $this->Memberships_Model->add_membership($data);

    if($added) {

      $membership = $this->Memberships_Model->get_lastest_membership($this->session->userdata['logged_in']['id']);
      if($membership) {
        $this->Memberships_Model->stop_old_memberships_renewal($membership);
      }

    }

  }

  public function membership($Teilnahmeid) {

    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $data = array();
      $data['userdata'] = $this->session->userdata['logged_in'];
      $data['inner_page'] = 'memberships/membership';
      $data['membership'] = $user_membership;
      $data['membership']['Validfrom_unix'] = datetime_to_timestamp($user_membership['Validfrom'], '-', ':', 'ymd');
      $data['membership']['Validuntil_unix'] = datetime_to_timestamp($user_membership['Validuntil'], '-', ':', 'ymd');
      $data['membership']['has_started'] = ($data['membership']['Validfrom_unix'] < time()) ? true : false;

      if ($this->input->server('REQUEST_METHOD') == 'POST') {
        if($this->input->post('From') !== null) {
          $membershipForm = 'break';

          $this->form_validation->set_rules('From', $this->lang->line('from'), array('trim', 'required', 'regex_match[/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/]'));
          $this->form_validation->set_rules('Until', $this->lang->line('until'), array('trim', 'required', 'regex_match[/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/]'));
        } elseif($this->input->post('MoveFrom') !== null) {
          $membershipForm = 'move';

          $this->form_validation->set_rules('MoveFrom', $this->lang->line('new_start_date'), array('trim', 'required', 'regex_match[/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/]'));
        }

        if ($this->form_validation->run() == FALSE) {

        } else {

          if($membershipForm == 'break') {

            $From = $this->input->post('From');
            $Until = $this->input->post('Until');

            $From_time = date_to_timestamp($From, '.');
            $Until_time = date_to_timestamp($Until, '.');

            if($From_time !== FALSE
                && $Until_time !== FALSE
                && $From_time > time()
                && $From_time < $Until_time
                && $data['membership']['breakable'] == 1
              ) {

              $break_data = array(
                'Teilnahmeid' => $Teilnahmeid,
                'break_from' => date("Y-m-d H:i:s", $From_time),
                'break_until' => date("Y-m-d H:i:s", $Until_time),
              );

              $break_duration = $Until_time - $From_time;

              $this->Memberships_Model->take_break($data['userdata']['id'], $break_data, $break_duration);

              $message = array('type' => 'success', 'text' => $this->lang->line('break_settings_saved'));
              $this->session->set_flashdata('flash_message', $message);

            } else {
              $message = array('type' => 'error', 'text' => $this->lang->line('break_dates_invalid'));
              $this->session->set_flashdata('flash_message', $message);
            }


          } elseif($membershipForm == 'move') {

            $MoveFrom = $this->input->post('MoveFrom');

            $MoveFrom_time = date_to_timestamp($MoveFrom, '.');

            if($MoveFrom_time !== FALSE
                && $MoveFrom_time > time()
              ) {

              $membership_interval = $data['membership']['Validuntil_unix'] - $data['membership']['Validfrom_unix'];
              $MoveUntil_time = $MoveFrom_time + $membership_interval;

              $move_data = array(
                'Validfrom' => date("Y-m-d H:i:s", $MoveFrom_time),
                'Validuntil' => date("Y-m-d H:i:s", $MoveUntil_time),
              );

              $this->Memberships_Model->move_membership($data['userdata']['id'], $Teilnahmeid, $move_data);

              $message = array('type' => 'success', 'text' => $this->lang->line('moved_membership_msg'));
              $this->session->set_flashdata('flash_message', $message);

            } else {
              $message = array('type' => 'error', 'text' => $this->lang->line('move_membership_date_invalid_msg'));
              $this->session->set_flashdata('flash_message', $message);
            }

          }

          redirect('/members/memberships/show/'.$Teilnahmeid);

        }
      }


      $data['break'] = $this->Memberships_Model->get_break($Teilnahmeid, false);
      $this->load->view('_layouts/frontend', $data);
    }

  }

  public function confirmation($Teilnahmeid=0) {
    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $data = array();
      $data['userdata'] = $this->session->userdata['logged_in'];
      $data['inner_page'] = 'memberships/confirmation';
      $data['membership'] = $user_membership;

      $this->load->view('_layouts/frontend', $data);
    }
  }

  public function pay($Teilnahmeid=0) {

    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } elseif($user_membership['paid'] == 1) {
      $message = array('type' => 'error', 'text' => 'This membership has already been paid.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $data = array();
      $data['userdata'] = $this->session->userdata['logged_in'];
      $data['inner_page'] = 'memberships/payment';
      $data['membership'] = $user_membership;

      $this->load->view('_layouts/frontend', $data);
    }

  }

  // cancel membership
  public function cancel($Teilnahmeid) {
    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('course_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $data = array();
      $data['userdata'] = $this->session->userdata['logged_in'];
      $data['inner_page'] = 'memberships/cancel';
      $data['membership'] = $user_membership;
      $data['membership']['Validfrom_unix'] = datetime_to_timestamp($user_membership['Validfrom'], '-', ':', 'ymd');

      if($data['membership']['Validfrom_unix'] <= time()) {

        $message = array('type' => 'error', 'text' => $this->lang->line('cannot_cancel_started_membership'));
        $this->session->set_flashdata('flash_message', $message);

        redirect('/members/memberships/show/'.$data['membership']['Teilnahmeid']);

      } elseif($data['membership']['paid'] == '1') {

        $message = array('type' => 'error', 'text' => $this->lang->line('cannot_cancel_paid_membership'));
        $this->session->set_flashdata('flash_message', $message);

        redirect('/members/memberships/show/'.$data['membership']['Teilnahmeid']);

      } elseif ($this->input->server('REQUEST_METHOD') == 'POST') {
        $this->form_validation->set_rules('sure', $this->lang->line('confirm'), array('trim', 'required'));
        $this->form_validation->set_rules('reason', $this->lang->line('reason'), array('trim', 'required'));

        if ($this->form_validation->run() == FALSE) {

        } else {
          $sure = $this->input->post('sure');
          $reason = $this->input->post('reason');

          $cancel = $this->Memberships_Model->cancel_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid, $reason);

          $message = array('type' => 'success', 'text' => $this->lang->line('membership_cancelled_msg'));
          $this->session->set_flashdata('flash_message', $message);

          redirect('/memberships');

        }
      }

      $this->load->view('_layouts/frontend', $data);

    }
  }

  public function delete_break($Teilnahmeid) {
    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $this->Memberships_Model->delete_break($Teilnahmeid);

      $message = array('type' => 'success', 'text' => $this->lang->line('break_deleted_msg'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members/memberships/show/'.$Teilnahmeid);
    }

  }

  public function stop_renewal($Teilnahmeid) {
    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $this->Memberships_Model->set_renewal($Teilnahmeid, 0);

      $message = array('type' => 'success', 'text' => $this->lang->line('renewal_stopped_msg'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members/memberships/show/'.$Teilnahmeid);
    }
  }

  public function start_renewal($Teilnahmeid) {
    $user_membership = $this->Memberships_Model->get_user_membership($this->session->userdata['logged_in']['id'], $Teilnahmeid);

    if($user_membership === false) {
      $message = array('type' => 'error', 'text' => $this->lang->line('membership_not_available'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/memberships');
    } else {
      $this->Memberships_Model->set_renewal($Teilnahmeid, 1);

      $message = array('type' => 'success', 'text' => $this->lang->line('renewal_started_msg'));
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members/memberships/show/'.$Teilnahmeid);
    }
  }

} // end of the class

?>
