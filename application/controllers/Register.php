<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Register extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
    }
  
    function content($page = 'register')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            echo 'whoops, file doesnt exist';
    }
  
      $data['title'] = ucfirst($page); // Capitalize the first letter
  
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);
    }
        
}
        
    /* End of file  register.php */
        
                            