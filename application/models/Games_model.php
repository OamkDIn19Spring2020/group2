<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  function getsales()
  {
      $this->db->select('*');
      $this->db->from('games');
      $this->db->where('sale > 0');
      $this->db->order_by('NOW DESC');
      return $this->db->get()->result_array();
  }
  function getgames()
  {
      $this->db->select('*');
      $this->db->from('games');
      $this->db->order_by('r_date DESC, idGame');
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

  public function gethot($period = '7'){
      $sql =    'select count(history.idGame) as p_count, games.*
                from history
                right join games on history.idGame = games.idGame
                where history.p_date >= CURDATE() - INTERVAL ? DAY
                group by idGame
                order by p_count desc, price desc';
      $this->db->query($sql, $period);
      return $this->db->get()->result_array();
  }
}
