<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_c extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Support_model');
    $this->load->helper('url_helper');
  }

  public function testing()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('message', 'Message', 'min_length[1]');
    
    if ($this->form_validation->run() ==FALSE)
      {
        $data [ 'page' ] = 'hot';
        $this->load->view('templates/page', $data);
      }
    else
      {
        $this->Support_model->addMessage();
      }
      $data['page'] = 'support';

      $data[ 'test01' ] = TRUE;
    
      $this->load->view('templates/page', $data);
  }
}
