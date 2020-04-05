<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hot_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Aboot_model');
    $this->load->model('Games_model');
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
    redirect('Hot_c/users');
    }

    function hotgames(){
        $period = $this->input->post('interval');
        $_SESSION['inter'] = $period;
        $data['hot'] = $this->Games_model->gethot($period);
        $data['page'] = 'hot';
        $data['inter'] = $period;
        $this->load->view('templates/page', $data);
    }

    public function view()
    {
        $period = '7';
        $data['user'] = $this->Aboot_model->getusers();
        $data['hot'] = $this->Games_model->gethot($period);
        $data['page'] = 'users';
        $this->load->view('templates/page', $data);

    }


}
