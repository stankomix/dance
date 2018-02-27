<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_Model extends CI_Model {

  public function get_all($Teilnehmerid) {
    $this->db->select('content.*');
    $this->db->from('content');
    $this->db->join('contentperson', 'contentperson.contentid=content.id');
    $this->db->where('contentperson.kursteilnehmerid='.$Teilnehmerid);
    $this->db->order_by('id DESC');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get($id, $Teilnehmerid) {
    $this->db->select('content.*');
    $this->db->from('content');
    $this->db->join('contentperson', 'contentperson.contentid=content.id');
    $this->db->where('content.id='.(int)$id.' AND contentperson.kursteilnehmerid='.$Teilnehmerid);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }
    return false;
  }

}

?>
