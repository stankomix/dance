<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Members_Model extends CI_Model {

  public function change_password($Teilnehmerid, $data) {

    $this->db->where('Teilnehmerid', $Teilnehmerid);
    $this->db->update('Kursteilnehmer', $data);

    return true;
  }

  public function change_language($Teilnehmerid, $data) {

    $this->db->where('Teilnehmerid', $Teilnehmerid);
    $this->db->update('Kursteilnehmer', $data);

    return true;
  }

  public function get_person_types() {

    $this->db->select('*');
    $this->db->from('Persontyp');
    $this->db->order_by('Persontypid ASC');

    $query = $this->db->get();

    $return_a = array();
    if ($query->num_rows() > 0) {
      $types = $query->result_array();

      foreach($types as $k => $type) {
        $return_a[$type['Persontypid']] = $type['Persontyp'];
      }
    }

    return $return_a;
  }

  public function get_user_messages($Teilnehmerid) {
    $this->db->select('userMessages.*, Kursteilnehmer.Vorname AS created_by_firstname, Kursteilnehmer.Nachname AS created_by_lastname');
    $this->db->from('userMessages');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid=userMessages.created_by');
    $this->db->where('created_by='.(int)$Teilnehmerid);
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

  public function get_message($id) {
    $query = $this->db->get_where('userMessages', 'id='.$id);

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }
    return false;
  }

  public function close_message($id) {
    $this->db->where('id', $id);
    $this->db->update('userMessages', array('status' => '0'));

    return true;
  }

}

?>
