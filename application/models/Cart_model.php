<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

  function purchase(){
      $insert_data=array(
          'username'=>$this->input->post('uname'),
          'price'=>$this->input->post('price'),
          'method'=>$this->input->post('meth'),
          'idGame'=>$this->input->post('game'),
      );

      return $this->db->insert('user', $insert_data);
  }

  function gethistoryall(){
      $this->db->select('*');
      $this->db->from('history');
    return $this->db->get()->result_array();
  }

}
