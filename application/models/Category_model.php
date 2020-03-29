<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

 public function sortcat($cat = FALSE)
 {

     if (!$cat){
         $sql = 'Select * from games';
         $this->db->query($sql);
         return $this->db->get()->result_array();
     }
    else{
         $sql = 'Select * from games where category like ?';
         $this->db->query($sql, $cat);
         return $this->db->get()->result_array();
    }
 }

}
