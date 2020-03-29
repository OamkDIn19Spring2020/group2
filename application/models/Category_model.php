<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

 public function sortcat($cat = NULL)
 {

     if ($cat === NULL){
         $this->db->select('*');
         $this->db->from('games');
         return $this->db->get()->result_array();
     }
    else{
         $this->db->select('*');
         $this->db->from('games');
         $this->db->where('category Like "'.$cat.'"');
         return $this->db->get()->result_array();
    }
 }

}
