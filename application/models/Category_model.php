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
         $this->db->select('*');
         $this->db->from('games');
         $this->db->where('category like '.$cat);
         return $this->db->get()->result_array();
    }
 }

}
