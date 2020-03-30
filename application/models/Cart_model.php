<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

  function purchase(){
     $this->db->insert('user', $insert_data);
    return $this->db->affected_rows();
  }

  function gethistoryall(){
      $this->db->select('*');
      $this->db->from('history');
    return $this->db->get()->result_array();
  }

}
