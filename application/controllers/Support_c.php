<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_c extends CI_Controller{

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
  }
}
