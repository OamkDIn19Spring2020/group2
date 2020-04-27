<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

    public function _construct()
    {
        parent::_construct();
        $this->load->model('Users_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    function content($page = 'login')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            echo 'whoops, file doesnt exist';
    }
      $data['page'] = $page;
      $this->load->view('templates/page', $data);
    }

    public function validatelogin()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->form_validation->set_rules('uname', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['page'] = 'login';
            $this->load->view('templates/page', $data);
        }

        else
        {
            $given_username=$this->input->post('uname');
            $given_password=$this->input->post('password');
            $this->load->model('Users_model');
            $db_password=$this->Users_model->getpassword($given_username);

            if (password_verify($given_password, $db_password)) {
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$given_username;
                $_SESSION['testarray'] = array();
                $_SESSION['codecheck'] = false;
                redirect('sales');
            }
            else {
                $_SESSION['logged_in']=false;
                $data['page'] = 'login';
                $this->load->view('templates/page', $data);
            }
        }
    }
}
