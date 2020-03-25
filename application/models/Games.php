<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  function getgames()
  {
      $this->db->select('*');
      $this->db->from('games');
      return $this->db->get()->result_array();
  }
}
