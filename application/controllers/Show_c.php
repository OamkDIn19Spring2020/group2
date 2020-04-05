<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  function index($gname = null)
  {
      $data['gname'] = $gname;
      $data['page']  = 'aboot';
      $this->load->view('templates/page', $data);

  }

}
