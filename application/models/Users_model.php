<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
                        
class Users_model extends CI_Model {
                        
  public function __construct()
  {
      $this->load->database();
  }

  function getusers()
  {
      $this->db->select('*');
      $this->db->from('user');
      return $this->db->get()->result_array();
  }
  
  public function adduser()
  {
    $plainpass = $this->input->post('password');
    $hash = password_hash($plainpass, PASSWORD_DEFAULT);

    $insert_data=array(
      'username'=>$this->input->post('uname'),
      'email'=>$this->input->post('email'),
      'password'=>$hash,
      'phone'=>$this->input->post('phone'),
      'country'=>$this->input->post('country'),
    );
    
    return $this->db->insert('user', $insert_data);
  }
}