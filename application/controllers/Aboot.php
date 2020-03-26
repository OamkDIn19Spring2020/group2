<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboot extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Aboot');
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
    $test=$this->Aboot->adduser($insert_data);

    $data['user'] = $this->Aboot->getusers();
    redirect('pages/users', $data);

}
}
