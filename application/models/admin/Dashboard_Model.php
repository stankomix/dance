<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

  public function get_members_num() {
    $this->db->select('COUNT(Teilnehmerid) AS num_members');

    $query = $this->db->get_where('Kursteilnehmer', 'usertype=0');
    if ($query->num_rows() == 1) {
      return $query->row_array()['num_members'];
    }

    return 0;
  }

  public function get_latest_members($days=7, $limit=10) {
    $this->db->select('Kursteilnehmer.*');
    $this->db->from('Kursteilnehmer');
    $this->db->where('usertype=0
                    AND Startam >= (DATE_SUB(CURDATE(), INTERVAL '.$days.' DAY))
                    ');
    $this->db->order_by('Teilnehmerid DESC');
    $this->db->limit($limit);

    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_latest_content_files($limit=10) {
    $this->db->select('*');
    $this->db->from('content');
    $this->db->order_by('id DESC');
    $this->db->limit($limit);

    $query = $this->db->get();

    return $query->result_array();
  }

  public function login($data) {

    $condition = "Email='" . $data['Email'] . "' AND usertype=1";
    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      $user = $query->row_array();

      if( password_verify ( $data['Passwort'] , $user['Passwort'] ) ) {
        return $user;
      }
      return false;

    } else {
      return false;
    }
  }

  public function get_open_messages_total() {
    $this->db->where('status=1 AND parentid=0');
    return $this->db->count_all_results('userMessages');
  }

  public function get_content_total() {
    return $this->db->count_all_results('content');
  }

}

?>
