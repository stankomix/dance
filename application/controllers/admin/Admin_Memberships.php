<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Memberships extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');

    $this->load->model('admin/Admin_Memberships_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();
    $this->data['conf'] = $this->conf;

    $this->verify_login();
  }

  public function index() {

    $memberships = $this->Admin_Memberships_Model->get_all_abotypes();
    $this->data['memberships'] = $memberships;

    $this->data['inner_page'] = 'admin/memberships/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function edit($id) {

    $this->data['membership'] = $this->Admin_Memberships_Model->get_abotype($id);

    if($this->data['membership'] == false) {
      $message = array('type' => 'danger', 'text' => 'This membership is no longer available.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/admin/memberships');
    }

    $this->data['inner_page'] = 'admin/memberships/edit';

    $this->form_validation->set_rules('description', 'Title', 'trim|min_length[3]|required');
    $this->form_validation->set_rules('promodescription', 'Promo description', 'trim|min_length[3]|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'Description' => $this->input->post('description'),
        'promodescription' => $this->input->post('promodescription'),
        'based_on' => $this->input->post('based_on'),
      );

      if(isset($_FILES['image']['size']) && !empty($_FILES['image']['size'])) {
        $filename = 'file_' . time();
        $uploaded = $this->upload_image($filename);

        if(isset($uploaded['file_name'])) {
          if($this->data['membership']['filename'] != '') {
            @unlink('./assets/uploads/memberships/' . $this->data['membership']['filename']);
          }

          $data['filename'] = $uploaded['file_name'];
        } else {
          $message = array('type' => 'danger', 'text' => $uploaded);
          $this->session->set_flashdata('flash_message', $message);

          redirect('/admin/memberships/edit/'.$id);
        }
      }

      $edited = $this->Admin_Memberships_Model->edit_abotype($id, $data);

      if($edited) {
        $message = array('type' => 'success', 'text' => 'Membership edited successfully.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/memberships');
      } else {
        $message = array('type' => 'danger', 'text' => 'A problem occured when editing.');
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/memberships/edit/'.$id);
      }

    }

  }

  public function view($abotype) {

    $membership = $this->Admin_Memberships_Model->get_abotype($abotype);
    $this->data['membership'] = $membership;
    $this->data['conf'] = $this->conf;

    $this->data['user_memberships'] = $this->Admin_Memberships_Model->get_abotype_user_memberships($abotype);

    $this->data['inner_page'] = 'admin/memberships/view';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function upload_image($filename) {
    $config = array();
    $config['upload_path']          = './assets/uploads/memberships/';
    $config['file_name']             = $filename;
    $config['allowed_types']        = 'jpg|jpeg|gif|png';
    $config['max_size']             = 1024*5;
    //$config['max_width']            = 1024;
    //$config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('image')) {
      return $this->upload->display_errors();
    } else {
      return $this->upload->data();
    }

  }

}
