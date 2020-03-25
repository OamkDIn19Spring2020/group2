<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                        
class Users_model extends CI_Model {
                        
  public function __construct()
  {
      parent::__construct();
  }

  function getusers()
  {
      $this->db->select('*');
      $this->db->from('user');
      return $this->db->get()->result_array();
  }                       
}                    