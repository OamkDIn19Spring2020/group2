<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_c extends CI_Controller {

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
    /* 
    |  This function takes the things from the registration form and checks if they are valid. 
    |  If not, it redirects back to the form saying what's wrong.
    |  If they are, it calls the adduser() function from the user model that inserts the data into the database.
    */
    $this->load->helper('form');

    $this->load->library('form_validation');

    $this->form_validation->set_rules('uname', 'Username', 'trim|required|alpha_numeric|min_length[3]|max_length[10]|is_unique[user.username]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[150]');
    $this->form_validation->set_rules('passconf', 'Password confirmation', 'trim|required|matches[password]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('phone', 'Phone number', 'trim|numeric|is_unique[user.phone]');
    $this->form_validation->set_rules('country', 'Home country', 'trim|alpha');

    if ($this->form_validation->run() == FALSE)
    {
        $data['page'] = 'register';
        $this->load->view('templates/page', $data);
    }
    else
    {
      $this->Users_model->adduser();
      $data['page'] = 'regsuccess';
      $this->load->view('templates/page', $data);
    }
  }
}
