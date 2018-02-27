<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Memberships_Model extends CI_Model {

  public function get_user_memberships($Teilnehmerid) {

    $this->db->select('Kursteilnahme.*, abotype.Description, coursetype.coursetypedesc, lessontype.lessontypedesc');
    $this->db->from('Kursteilnahme');
    $this->db->join('abotype', 'abotype.abotype = Kursteilnahme.abotype');
    $this->db->join('coursetype', 'coursetype.coursetype = Kursteilnahme.coursetype');
    $this->db->join('lessontype', 'lessontype.lessontype = Kursteilnahme.lessontype');
    //$this->db->where('Kursteilnehmerid='.$Teilnehmerid.' AND Validuntil >= CURDATE()');
    $this->db->where('Kursteilnehmerid='.$Teilnehmerid.'
                      AND (
                            Validuntil >= (DATE_SUB(CURDATE(), INTERVAL 365 DAY))
                            OR
                            erfasstam >= (DATE_SUB(CURDATE(), INTERVAL 365 DAY))
                          )
                      AND cancelled=0
                      ');
    $this->db->order_by('Kursteilnahme.Teilnahmeid DESC');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result_array();
    }

    return false;
  }

  public function get_user_membership($Kursteilnehmerid, $Teilnahmeid=0) {

    $where = 'Kursteilnehmerid='.$Kursteilnehmerid.' AND cancelled=0';

    // gets by id, otherwise the latest
    if($Teilnahmeid != 0) {
      $where .= ' AND Teilnahmeid='.$Teilnahmeid.'';
    }

    $this->db->select('Kursteilnahme.*, abotype.Description, coursetype.coursetypedesc, lessontype.lessontypedesc');
    $this->db->from('Kursteilnahme');
    $this->db->join('abotype', 'abotype.abotype = Kursteilnahme.abotype');
    $this->db->join('coursetype', 'coursetype.coursetype = Kursteilnahme.coursetype');
    $this->db->join('lessontype', 'lessontype.lessontype = Kursteilnahme.lessontype');
    $this->db->where($where);

    $this->db->order_by('Teilnahmeid DESC');
    $this->db->limit(1);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }

    return false;
  }

  public function get_course_types() {
    $c_types_db = $this->db->get('coursetype');
    $c_types = array();
    foreach($c_types_db->result_array() as $k => $c_type) {
      $c_types[$c_type['coursetype']] = $c_type['coursetypedesc'];
    }

    return $c_types;
  }

  public function get_abo_types($course_type, $key_prefix='', $based_on=1) {

    $where = 'coursetype='.$course_type.' AND inaktiv=0';
    if($based_on !== FALSE) {
      $where .= ' AND based_on='.$based_on;
    }

    $this->db->select('abotype, Description, promodescription, filename');
    $this->db->from('abotype');
    $this->db->where($where);

    $a_types_db = $this->db->get();
    $a_types = array();

    foreach($a_types_db->result_array() as $k => $a_type) {
      //$a_types[$key_prefix . $a_type['abotype']] = $a_type['Description'];
      $a_types[$key_prefix . $a_type['abotype']] = $a_type;
    }

    return $a_types;
  }
  
  public function get_abo_type($abotype) {
    $this->db->select('*');
    $this->db->from('abotype');
    $this->db->where('abotype='.$abotype.'');

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }

    return false;
  }

  public function get_course_based_abo_type($course_type) {
    $this->db->select('*');
    $this->db->from('abotype');
    $this->db->where('coursetype='.$course_type.' AND based_on=1 AND inaktiv=0');
    $this->db->order_by('abotype DESC');
    $this->db->limit(1);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }

    return false;
  }

  public function get_courses_list($course_type, $key_prefix='') {
    $this->db->select('id, name');
    $this->db->from('course');
    $this->db->where('type='.$course_type.' AND reservation=1');

    $c_types_db = $this->db->get();
    $c_types = array();

    foreach($c_types_db->result_array() as $k => $c_type) {
      $c_types[$key_prefix . $c_type['id']] = $c_type['name'];
    }

    return $c_types;
  }

  public function get_courses_based_list($course_type, $key_prefix='') {
    $this->db->select('id, name');
    $this->db->from('course');
    //$this->db->join('a');
    $this->db->where('type='.$course_type.' AND reservation=1
                      AND type IN (SELECT coursetype FROM abotype WHERE based_on=1 AND inaktiv=0)
                  ');

    $c_types_db = $this->db->get();
    $c_types = array();

    foreach($c_types_db->result_array() as $k => $c_type) {
      $c_types[$key_prefix . $c_type['id']] = $c_type['name'];
    }

    return $c_types;
  }

  public function get_lastest_membership($Kursteilnehmerid) {
    $this->db->select('*');
    $this->db->from('Kursteilnahme');
    $this->db->where('Kursteilnehmerid='.$Kursteilnehmerid);
    $this->db->order_by('Teilnahmeid DESC');
    $this->db->limit('1');

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }

    return false;
  }

  public function stop_old_memberships_renewal($latestMembership) {
    $this->db->where('Teilnahmeid <> '.$latestMembership['Teilnahmeid'].'
                        AND Kursteilnehmerid='.$latestMembership['Kursteilnehmerid'].'
                        AND coursetype='.$latestMembership['coursetype'].'
                        AND cancelled=0
                        ');
    return $this->db->update('Kursteilnahme', array(
                                          'renewal' => '0'
                                        )
                      );
  }

  public function add_membership($data) {

    return $this->db->insert('Kursteilnahme', $data);

  }

  public function cancel_membership($Kursteilnehmerid, $Teilnahmeid, $reason) {
    $this->db->where('Teilnahmeid='.$Teilnahmeid.'
                        AND Kursteilnehmerid='.$Kursteilnehmerid.'
                        AND Validfrom > CURDATE()
                        AND paid=0
                        ');
    $this->db->update('Kursteilnahme', array(
                                          'cancelled' => '1',
                                          'cancel_reason' => $reason
                                        )
                      );

    return true;
  }

  public function get_break($Teilnahmeid, $all=false) {

    $where = 'Teilnahmeid='.$Teilnahmeid;
    if(!$all) {
      $where .= ' AND break_until >= CURDATE()';
    }

    $this->db->select('*');
    $this->db->from('breaks');
    $this->db->where($where);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->row_array();
    }

    return false;
  }

  protected function get_break_interval($break_from, $break_until) {

    $this->load->helper('datetime_helper');

    $break_from_unix = datetime_to_timestamp($break_from, '-', ':', 'ymd');
    $break_until_unix = datetime_to_timestamp($break_until, '-', ':', 'ymd');

    if( time() < $break_from_unix ) {
      $substract_break_interval_unix = $break_until_unix - $break_from_unix;
    } elseif( time() < $break_until_unix) {
      $substract_break_interval_unix = $break_until_unix - time();
    } else {
      $substract_break_interval_unix = 0;
    }

    $substract_break_interval_days = floor($substract_break_interval_unix/(60*60*24));

    return $substract_break_interval_days;
  }

  protected function set_membership_valid_until($Teilnahmeid, $duration_days) {

    $this->db->where('Teilnahmeid', $Teilnahmeid);

    // add days if $duration_days > 0, otherwise it substracts
    $this->db->set('Validuntil', 'DATE_ADD(Validuntil , INTERVAL '.$duration_days.' DAY)', FALSE);

    $this->db->update('Kursteilnahme');

  }

  public function take_break($Teilnehmerid, $data, $duration) {

    $this->load->helper('datetime_helper');

    $exists = $this->get_break($data['Teilnahmeid'], true);

    $duration_days = floor($duration/(60*60*24));

    if($exists === false) {

      $this->set_membership_valid_until($data['Teilnahmeid'], $duration_days);

      $this->db->insert('breaks', $data);

    } else {

      $substract_break_interval_days = $this->get_break_interval($exists['break_from'], $exists['break_until']);

      $computed_duration_days = $duration_days - $substract_break_interval_days;

      if($computed_duration_days != 0) {
        $this->set_membership_valid_until($data['Teilnahmeid'], $computed_duration_days);
      }

      $this->db->where('Teilnahmeid', $data['Teilnahmeid']);
      $this->db->update('breaks', $data);

    }

    return true;
  }

  public function delete_break($Teilnahmeid) {

    $this->load->helper('datetime_helper');

    $exists = $this->get_break($Teilnahmeid, true);

    if($exists !== false) {

      $substract_break_interval_days = $this->get_break_interval($exists['break_from'], $exists['break_until']);

      if($substract_break_interval_days != 0) {
        $substract_break_interval_days *= -1;
        //var_dump($substract_break_interval_days);die();
        $this->set_membership_valid_until($Teilnahmeid, $substract_break_interval_days);
      }

      $this->db->delete('breaks', array('Teilnahmeid' => $Teilnahmeid));

    }

    /*$this->db->where('Teilnahmeid', $Teilnahmeid);
    $this->db->update('breaks', array(
                                          'break_from' => '0000-00-00 00:00:00',
                                          'break_until' => '0000-00-00 00:00:00'
                                        )
                      );
    */
    return true;
  }

  public function move_membership($Teilnehmerid, $Teilnahmeid, $data) {

    $this->db->where('Teilnahmeid=' . $Teilnahmeid
                      . ' AND Kursteilnehmerid=' . $Teilnehmerid
                        );
    $this->db->update('Kursteilnahme', $data);

    return true;
  }

  public function set_renewal($Teilnahmeid, $renewal) {
    $this->db->where('Teilnahmeid', $Teilnahmeid);
    $this->db->update('Kursteilnahme', array(
                                            'renewal' => $renewal
                                            )
                    );
    return true;
  }

}

?>
