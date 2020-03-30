<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Games_model');
    $this->load->model('Aboot_model');
    $this->load->model('Users_model');
  }

  function content($page = 'sales')
  {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          // Whoops, we don't have a page for that!
          echo 'whoops, file doesnt exist';
  }
    $data['games'] = $this->Games_model->getgames();
    $data['user'] = $this->Aboot_model->getusers();
    $data['page'] = $page;
    $this->load->view('templates/page', $data);

  }


}
