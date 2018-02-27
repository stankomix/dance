<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

}

class Admin_Controller extends MY_Controller {

  protected $data = array();
  protected $conf = array();

  public function __construct() {
    parent::__construct();

    $this->config->set_item('language', 'english');

    $this->config->load('danzare');
    $this->conf = $this->config->item('danzare');
  }

  public function verify_login() {
    if (
      isset($this->session->userdata)
      && isset($this->session->userdata['admin'])
      && isset($this->session->userdata['admin']['id'])
      && !empty($this->session->userdata['admin']['id'])
    ) {
      return true;
    } else {
      redirect('/admin/login');
    }
  }

}

class Frontend_Controller extends MY_Controller {

  protected $data = array();
  protected $conf = array();

  public function __construct() {
    parent::__construct();

    $this->config->load('danzare');
    $this->conf = $this->config->item('danzare');
  }

  public function verify_login() {
    if (
      isset($this->session->userdata)
      && isset($this->session->userdata['logged_in'])
      && isset($this->session->userdata['logged_in']['id'])
      && !empty($this->session->userdata['logged_in']['id'])
    ) {
      return true;
    } else {
      redirect('/logout');
    }
  }

}

?>
