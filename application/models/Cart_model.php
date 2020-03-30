<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {

  function purchase(){
      $insert_data=array(
        'username'=>$this->input->post('uname'),
        'email'=>$this->input->post('email'),
        'password'=>$hash,
        'phone'=>$this->input->post('phone'),
        'country'=>$this->input->post('country'),
      );

      return $this->db->insert('user', $insert_data);
  }

  function gethistoryall(){
      $this->db->select('*');
      $this->db->from('history');
    return $this->db->get()->result_array();
  }

}
