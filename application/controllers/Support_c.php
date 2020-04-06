<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_c extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Support_model');
    $this->load->database();
    $this->load->helper('url_helper');
  }

  function content($page = 'support')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            echo 'whoops, file doesnt exist';
    }
    
    $data['page'] = $page;

    $this->load->view('templates/page', $data);
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('message', 'Message', 'min_length[1]');
    
    $option = $this->input->post("options");
    $message = $this->input->post("message");
    $username = $_SESSION["username"];
    
    if ($this->form_validation->run() ==FALSE)
      {
        $data [ 'page' ] = 'support';
        $this->load->view('templates/page', $data);
      }
    else
      {
        $this->Support_model->addMessage();
      }
  }
}
