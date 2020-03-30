<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->helper('url_helper');
    }

  function content($page = 'register')
  {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          // Whoops, we don't have a page for that!
          echo 'whoops, file doesnt exist';
  }
    $data['page'] = $page;
    $this->load->view('templates/page', $data);
  }



  public function createuser()
  {
    $this->load->helper('form');

    $this->load->library('form_validation');

    $this->form_validation->set_rules('uname', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->content($page = 'register');
    }
    else
    {
      $this->Users_model->adduser();
      $this->load->view('pages/regsuccess');
    }
  }
}
