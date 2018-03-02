<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin_Memberships_Model extends CI_Model {

  public function get_user_memberships($Teilnehmerid) {

    $this->db->select('Kursteilnahme.*, abotype.Description, coursetype.coursetypedesc, lessontype.lessontypedesc');
    $this->db->from('Kursteilnahme');
    $this->db->join('abotype', 'abotype.abotype = Kursteilnahme.abotype');
    $this->db->join('coursetype', 'coursetype.coursetype = Kursteilnahme.coursetype');
    $this->db->join('lessontype', 'lessontype.lessontype = Kursteilnahme.lessontype');
    $this->db->where('Kursteilnehmerid='.$Teilnehmerid.'');
    $this->db->order_by('Kursteilnahme.Teilnahmeid DESC');

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result_array();
    }

    return false;
  }

  public function get_abotype($abotype) {
    $this->db->select('abotype.*, coursetype.coursetypedesc');
    $this->db->join('coursetype', 'coursetype.coursetype = abotype.coursetype');
    $query = $this->db->get_where('abotype', array('abotype' => $abotype));

    return $query->row_array();
  }

  public function get_all_abotypes() {
    $this->db->select('abotype.*, coursetype.coursetypedesc');
    $this->db->from('abotype');
    $this->db->join('coursetype', 'coursetype.coursetype = abotype.coursetype');
    $this->db->order_by('abotype.abotype DESC');

    $query = $this->db->get();

    return $query->result_array();
  }

  public function edit_abotype($abotype, $data) {
    $this->db->where('abotype', $abotype);
    $this->db->update('abotype', $data);

    return true;
  }

  public function get_abo_types_list($course_type=FALSE, $based_on=FALSE) {

    $where = 'inaktiv=0';
    if($course_type !== FALSE) {
      $where .= ' AND coursetype='.$course_type;
    }
    if($based_on !== FALSE) {
      $where .= ' AND based_on='.$based_on;
    }

    $this->db->select('abotype, Description, promodescription, filename');
    $this->db->from('abotype');
    $this->db->where($where);

    $a_types_db = $this->db->get();
    $a_types = array();

    foreach($a_types_db->result_array() as $k => $a_type) {
      $a_types[$a_type['abotype']] = $a_type['Description'];
    }

    return $a_types;
  }

  public function get_abotype_user_memberships($abotype) {

    $this->db->select('Kursteilnahme.*,
                      abotype.Description,
                      coursetype.coursetypedesc,
                      lessontype.lessontypedesc,
                      Kursteilnehmer.Vorname, Kursteilnehmer.Nachname
                      ');
    $this->db->from('Kursteilnahme');
    $this->db->join('abotype', 'abotype.abotype = Kursteilnahme.abotype');
    $this->db->join('Kursteilnehmer', 'Kursteilnehmer.Teilnehmerid = Kursteilnahme.Kursteilnehmerid');
    $this->db->join('coursetype', 'coursetype.coursetype = Kursteilnahme.coursetype');
    $this->db->join('lessontype', 'lessontype.lessontype = Kursteilnahme.lessontype');
    $this->db->where('Kursteilnahme.abotype='.$abotype);

    $this->db->order_by('Kursteilnahme.Teilnahmeid DESC');

    $query = $this->db->get();

    return $query->result_array();

  }
  
  public function get_course_type(){
	  
		$this->db->select('*');
		$this->db->from('coursetype');
	    $query = $this->db->get();

		return $query->result_array();
  }

  public function add_membership($data){

		$this->db->insert('abotype',$data);
		return true;
  }
  
	
  
}

?>
