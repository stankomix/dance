<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Frontend_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->library('session');

    $this->verify_login();

    $this->load->model('Content_Model');

    $this->load->helper('datetime_helper');

    // internationalization
    $this->load->helper('misc_helper');
    $language = get_site_language();
    $this->lang->load('danzare', $language);
    $this->config->set_item('language', $language);
  }

  public function index() {

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'content/main';

    $contents = $this->Content_Model->get_all($this->session->userdata['logged_in']['id']);
    $data['contents'] = $contents;

    $this->load->view('_layouts/frontend', $data);

  }

  public function file($id) {

    $data = array();
    $data['userdata'] = $this->session->userdata['logged_in'];
    $data['inner_page'] = 'content/file';

    $content = $this->Content_Model->get($id, $this->session->userdata['logged_in']['id']);

    if($content == false) {
      $message = array('type' => 'error', 'text' => 'This content file is not available.');
      $this->session->set_flashdata('flash_message', $message);

      redirect('/members/content');
    } else {
      $data['content'] = $content;
      $data['conf'] = $this->conf;

      $this->load->view('_layouts/frontend', $data);
    }

  }

}
