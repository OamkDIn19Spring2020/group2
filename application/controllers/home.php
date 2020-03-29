<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //load models here
    $this->load->model('Games');
    $this->load->model('Aboot_model');
    $this->load->model('Category_model')
  }

  function content($page = 'sales')
  {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          // Whoops, we don't have a page for that!
          echo 'whoops, file doesnt exist';
  }
    $this->load->helper('url');

    //load all model data requests here

    $data['games'] = $this->Games->getgames();
    $data['user'] = $this->Aboot_model->getusers();
    //$data['cats'] = $this->Category_model->sortcat();
    $data['page'] = $page;
    $this->load->view('templates/page', $data);

  }


}
