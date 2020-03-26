<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboot extends CI_Model {

    public function __construct()
      {
        parent::__construct();
        //Codeigniter : Write Less Do More
      }

    public function adduser($insert_data){
        $this->db->insert('user',$insert_data);
        return $this->db->affected_rows();
    }
    function getusers()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result_array();
    }
}
