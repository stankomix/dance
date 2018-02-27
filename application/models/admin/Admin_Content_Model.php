<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Content_Model extends CI_Model {

  public function get_all($limit=0, $page=0) {

    $page = ($page > 0) ? ($page - 1) : 0;
    $from = $page * $limit;

    $this->db->select('*');
    $this->db->from('content');
    $this->db->order_by('id DESC');
    $this->db->limit($limit, $from);

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_total() {
    return $this->db->count_all_results('content');
  }

  public function get($id) {
    $this->db->select('*');
    $this->db->from('content');
    $this->db->where('id='.(int)$id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }
    return false;
  }

  public function get_user_content_list($Teilnehmerid) {
    $this->db->select('content.*');
    $this->db->from('contentperson');
    $this->db->join('content', 'content.id=contentperson.contentid');
    $this->db->where('kursteilnehmerid='.$Teilnehmerid);
    $this->db->order_by('id DESC');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function add($data) {

    $this->db->insert('content', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    }

    return false;

  }

}

?>
