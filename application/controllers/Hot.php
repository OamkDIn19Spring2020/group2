<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hot extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Aboot_model');
    $load->load->hepler('url_helper');
  }



  public function adduser(){
    //print_r($this->input->post());
    $plainpass = $this->input->post('password');
    $hash = password_hash($plainpass, PASSWORD_DEFAULT);

    $insert_data=array(
      'username'=>$this->input->post('username'),
      'email'=>$this->input->post('email'),
      'password'=>$hash,
      'phone'=>$this->input->post('phone'),
      'country'=>$this->input->post('country'),
    );
    $test=$this->Aboot_model->adduser($insert_data);
    $data['user'] = $this->Aboot_model->getusers();
    $data['page'] = 'users';
    $this->load->view('templates/page', $data);
    }
    public function view()
    {
        $data['user'] = $this->Aboot_model->getusers();
        $data['page'] = 'users';
        $this->load->view('templates/page', $data);

    }


}
