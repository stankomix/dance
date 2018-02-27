<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_Database extends CI_Model {

  // Insert registration data in database
  public function registration_insert($data) {

    // Check if Email already exists
    $condition = "Email='" . $data['Email'] . "'";

    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {

      // Query to insert data in database
      $this->db->insert('Kursteilnehmer', $data);
      if ($this->db->affected_rows() > 0) {
        return true;
      }
    } else {
      return false;
    }
  }

  // Read data using username and password
  public function login($data) {

    //$condition = "Benutzername='" . $data['Benutzername'] . "' OR Email='" . $data['Benutzername'] . "'";
    $condition = "Email='" . $data['Email'] . "'";
    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      $user = $query->row_array();

      if( password_verify ( $data['Passwort'] , $user['Passwort'] ) ) {
        return true;
      }
      return false;

    } else {
      return false;
    }
  }

  // Read data from database to show data in admin page
  public function read_user_information($field) {

    //$condition = "Benutzername='" . $field . "' OR Email='" . $field . "'";
    $condition = "Email='" . $field . "'";
    $this->db->select('*');
    $this->db->from('Kursteilnehmer');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    } else {
      return false;
    }
  }

  // used when user forgets the password
  public function update_login_code($Teilnehmerid, $login_code_data) {

    $this->db->where('Teilnehmerid', $Teilnehmerid);
    $this->db->update('Kursteilnehmer', $login_code_data);

    return true;
  }

  // accessed by clicking the link in email
  public function login_with_code($login_code) {
    $query = $this->db->get_where('Kursteilnehmer',
                          array('login_code' => $login_code),
                          1,
                          0
                        );
    if ($query->num_rows() == 1) {

      $result = $query->row_array();

      if($result['login_code_time'] > time() ) {
        return $result;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

}

?>
