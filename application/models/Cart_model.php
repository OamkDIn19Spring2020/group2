<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

  function purchase($uname, $price, $game, $method){
      $insert_data=array(
          'username'=>$uname,
          'price'=>$price,
          'method'=>$method,
          'idGame'=>$game,
      );

      return $this->db->insert('history', $insert_data);
  }

  function gethistoryall($nametofind){
      $this->db->select('*');
      $this->db->from('history');
      $this->db->where('username like "'.$nametofind.'"');
      $this->db->order_by('p_date DESC');
    return $this->db->get()->result_array();
  }

  function promocode($codetofind){
      $this->db->select('percentoff');
      $this->db->from('promocode');
      $this->db->where('codes like "'.$codetofind.'"');

      return $this->db->get()->result_array();

  }
}
