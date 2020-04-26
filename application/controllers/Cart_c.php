<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cart_model');
    $this->load->model('Games_model');
    $this->load->model('Aboot_model');
  }

  function index()
  {
      $insert_data=array(
        'username'=>$this->input->post('uname'),
        'price'=>$this->input->post('price'),
        'method'=>$this->input->post('meth'),
        'idGame'=>$this->input->post('game'),
      );
      $this->Cart_model->purchase($insert_data);

      $data['page'] = 'cart';
      $data['games'] = $this->Games_model->getgames();
      $data['user'] = $this->Aboot_model->getusers();
      $data['logs'] = $this->Cart_model->gethistoryall();
      $this->load->view('templates/page', $data);
  }

  function pushing(){
      array_push($_SESSION['testarray'], $this->input->post('pushingtoarray'));
      redirect('games');
  }

}
