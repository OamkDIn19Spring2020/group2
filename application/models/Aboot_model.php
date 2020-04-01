<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboot_model extends CI_Model {

    public function __construct()
      {
        parent::__construct();
        //Codeigniter : Write Less Do More
      }

    function getusers()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result_array();
    }
}
