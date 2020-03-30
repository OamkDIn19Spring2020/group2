<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  function getgames()
  {
      $this->db->select('*, 0.01*sale*price as Sale');
      $this->db->from('games');
      $this->db->where('sale not 0');
      $this->db->order('NOW');
      return $this->db->get()->result_array();
  }
  public function searchgame($id_game = '%')
  {
     $this->db->select('*');
     $this->db->from('games');
     $this->db->where('idGame Like "'.$id_game.'"');
     return $this->db->get()->result_array();
  }
  public function search($id_s = '%')
  {
     $this->db->select('*');
     $this->db->from('games');
     $this->db->where('concat_ws(idGame, developer, publisher, category) Like "'.$id_s.'"');
     return $this->db->get()->result_array();
  }
}
