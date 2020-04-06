<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_model extends CI_Model {
  
  public function addMessage()
  {
    $insert_data= array(
      'username' => $_SESSION["username"],
      'issue' => $this->input->post("options"),
      'message' => $this->input->post("message"),
    );
    return $this->db->insert('support', $insert_data);
  }

}