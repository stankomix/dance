<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Content extends Admin_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');
    $this->load->library('form_validation');

    $this->load->helper('form');
    $this->load->helper('datetime_helper');

    $this->load->model('admin/Admin_Content_Model');

    $this->data['userdata'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : array();

    $this->verify_login();
  }

  public function index() {

    $this->load->library('pagination');

    $total_rows = $this->Admin_Content_Model->get_total();

    $p_conf = $this->conf['admin_pagination_conf'];
    $p_conf['base_url'] = base_url() . 'admin/content';
    $p_conf['total_rows'] = $total_rows;
    $p_conf['per_page'] = 12;

    $page = ($this->uri->segment($p_conf['uri_segment'])) ? $this->uri->segment($p_conf['uri_segment']) : 0;

    $this->data['contents'] = $this->Admin_Content_Model->get_all($p_conf['per_page'], $page);

    $this->pagination->initialize($p_conf);

    $this->data['pagination_links'] = $this->pagination->create_links();

    $this->data['inner_page'] = 'admin/content/list';
    $this->load->view('admin/_layouts/admin', $this->data);

  }

  public function add() {

    $this->data['inner_page'] = 'admin/content/add';
    $this->data['allowed_types'] = implode(", ", array_keys($this->conf['filetypes']));

    $this->form_validation->set_rules('title', 'Title', 'trim|min_length[3]|required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/_layouts/admin', $this->data);
    } else {

      $data = array(
        'title' => $this->input->post('title'),
      );

      $filename = 'file_' . time();
      $uploaded = $this->upload_file($filename);

      if(isset($uploaded['file_name'])) {
        $data['extension'] = str_replace('.', '', $uploaded['file_ext']);
        $data['type'] = $this->conf['filetypes'][$data['extension']]['type'];
        $data['file_name'] = $uploaded['file_name'];
        $data['created_date'] = date('Y-m-d', time());

        $added = $this->Admin_Content_Model->add($data);

        if($added) {
          $message = array('type' => 'success', 'text' => 'Content added successfully.');
          $this->session->set_flashdata('flash_message', $message);

          redirect('/admin/content');
        } else {
          $message = array('type' => 'danger', 'text' => 'A problem occured when adding.');
          $this->session->set_flashdata('flash_message', $message);

          redirect('/admin/content/add');
        }

      } else {
        $message = array('type' => 'danger', 'text' => $uploaded);
        $this->session->set_flashdata('flash_message', $message);

        redirect('/admin/content/add');
      }

    }

  }

  public function view($id) {
    $content = $this->Admin_Content_Model->get($id);
    $this->data['content'] = $content;
    $this->data['conf'] = $this->conf;

    $this->data['inner_page'] = 'admin/content/view';
    $this->load->view('admin/_layouts/admin', $this->data);
  }

  public function upload_file($filename) {
    $config = array();
    $config['upload_path']          = './assets/uploads/';
    $config['file_name']             = $filename;
    $config['allowed_types']        = implode("|", array_keys($this->conf['filetypes']));
    $config['max_size']             = 1024*50;
    //$config['max_width']            = 1024;
    //$config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file')) {
      return $this->upload->display_errors();
    } else {
      return $this->upload->data();
    }

  }



}
