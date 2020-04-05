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


  public function search($id_s = '%', $datesort = '>', $start_date = '1970-01-01', $order = 'idGame, price desc')
  {
     $this->db->select('*');
     $this->db->from('games');
     $this->db->where('concat_ws(idGame, developer, publisher, category) Like "'.$id_s.'" and r_date '.$datesort.' "'.$start_date.'"');
     $this->db->order_by($order);
     return $this->db->get()->result_array();
  }

  public function gethot($period = '7'){
      $this->db->select('count(history.idGame) as p_count, games.*');
      $this->db->from('history');
      $this->db->join('games', 'history.idGame = games.idGame', 'right');
      $this->db->where('history.p_date >= CURDATE() - interval '.$period.' DAY');
      $this->db->group_by('idGame');
      $this->db->order_by('p_count desc, price desc');
      return $this->db->get()->result_array();
  }
}
