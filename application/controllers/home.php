<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  function content($page = 'sales')
  {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          // Whoops, we don't have a page for that!
          echo 'whoops, file doesnt exist';
  }

    $this->load->view('templates/header');
    $this->load->view('pages/'.$page);
    $this->load->view('templates/footer');

  }

}
