<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

  function purchase(){
      $insert_data=array(
          'username'=>$this->input->post('uname'),
          'price'=>$this->input->post('price'),
          'method'=>$this->input->post('meth'),
          'idGame'=>$this->input->post('game'),
      );

      return $this->db->insert('history', $insert_data);
  }

  function gethistoryall(){
      $this->db->select('*');
      $this->db->from('history');
      $this->db->order_by('p_date DESC');
    return $this->db->get()->result_array();
  }

  function promocode(){
    $insert_data=array(
      'codes'=>$this->input->post('promo')
    );
  }

}
