<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
      $parts = parse_url('193.167.100.74/~t8hula00/group2/index.php/Show_c/index/$1');
      r_print($parts);
      $gname = parse_url('193.167.100.74/~t8hula00/group2/index.php/Show_c/index/$1');
      $data['page']  = 'aboot';
      $this->load->view('templates/page', $data);

  }

}
