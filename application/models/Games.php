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
  public function sortcat($id_game = '%')
  {
     $this->db->select('*');
     $this->db->from('games');
     $this->db->where('idGame Like "'.$id_game.'"');
     return $this->db->get()->result_array();
  }
}
