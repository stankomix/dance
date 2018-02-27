<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

  public function get_all($limit=0, $page=0) {

    $page = ($page > 0) ? ($page - 1) : 0;
    $from = $page * $limit;

    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->order_by('Teilnehmerid DESC');
    $this->db->limit($limit, $from);

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_total() {
    return $this->db->count_all_results('Kursteilnehmer');
  }

  public function search($text) {
    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->like('Email', $text, 'both');
    $this->db->or_like('Vorname', $text, 'both');
    $this->db->or_like('Nachname', $text, 'both');
    $this->db->order_by('Teilnehmerid DESC');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get($Teilnehmerid) {
    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->where('Teilnehmerid='.(int)$Teilnehmerid);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }
    return false;
  }

  public function edit($Teilnehmerid, $data) {

    $this->db->where('Teilnehmerid', $Teilnehmerid);
    $this->db->update('Kursteilnehmer', $data);

    return true;
  }

  public function get_user_messages($Teilnehmerid, $parentid=FALSE) {

    $where = 'person='.(int)$Teilnehmerid;
    if($parentid !== FALSE) {
      $where .= ' AND parentid='.$parentid;
    }

    $this->db->select('userMessages.*, Kursteilnehmer.Vorname AS created_by_firstname, Kursteilnehmer.Nachname AS created_by_lastname');
    $this->db->from('userMessages');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid=userMessages.created_by');
    $this->db->where($where);
    $this->db->order_by('userMessages.id DESC');

    $query = $this->db->get();

    return $query->result_array();

  }

  public function add_user_message($data) {

    $this->db->insert('userMessages', $data);

    if ($this->db->affected_rows() > 0) {
      return true;
    }

    return false;

  }

  public function set_message_status($id, $data) {

    $this->db->where('id', $id);
    $this->db->update('userMessages', $data);

    return true;
  }

  public function get_all_messages($limit=0, $page=0) {
    $page = ($page > 0) ? ($page - 1) : 0;
    $from = $page * $limit;

    $this->db->select('userMessages.*, Kursteilnehmer.Vorname AS member_firstname, Kursteilnehmer.Nachname AS member_lastname');
    $this->db->from('userMessages');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid=userMessages.person');
    $this->db->order_by('id DESC');
    $this->db->limit($limit, $from);

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_open_messages($limit=0) {

    $this->db->select('userMessages.*, Kursteilnehmer.Vorname AS member_firstname, Kursteilnehmer.Nachname AS member_lastname');
    $this->db->from('userMessages');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid=userMessages.person');
    $this->db->where('userMessages.status=1 AND userMessages.parentid=0');
    $this->db->order_by('id DESC');
    $this->db->limit($limit);

    $query = $this->db->get();

    return $query->result_array();
  }

  public function search_messages($text) {
    $this->db->select('userMessages.*, Kursteilnehmer.Vorname AS member_firstname, Kursteilnehmer.Nachname AS member_lastname');
    $this->db->from('userMessages');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid=userMessages.person');
    $this->db->like('message', $text, 'both');
    $this->db->order_by('id DESC');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function get_messages_total() {
    return $this->db->count_all_results('userMessages');
  }

}

?>
