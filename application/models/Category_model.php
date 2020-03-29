<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

 public function sortcat()
 {
    $sql = 'Select * from games where category like = ?';
    $this->db->query($sql, $this->);
    return $this->db->get()->result_array();
 }

}
