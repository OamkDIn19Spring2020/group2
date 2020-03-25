<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        
class Register extends CI_Controller {

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
}