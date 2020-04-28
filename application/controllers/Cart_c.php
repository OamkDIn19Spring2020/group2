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
    $uname=$_SESSION['username'];
      foreach($_SESSION['testarray'] as $smth) {
        foreach($smth as $row) {
          $this->Cart_model->purchase($_SESSION['username'], $row['NOW'], $row['idGame'], $this->input->post('meth'));
        }
      }

      $_SESSION['testarray'] = array();
      $_SESSION['codecheck'] = false;
      redirect('games');

     /* $data['page'] = 'cart';
      $data['games'] = $this->Games_model->getgames();
      $data['user'] = $this->Aboot_model->getusers();
      $data['logs'] = $this->Cart_model->gethistoryall();
      $this->load->view('templates/page', $data);*/
  }

  function pushing(){
      $gameBuy=$this->input->post('game');
      $page = $this->input->post('page');
      array_push($_SESSION['testarray'], $this->Games_model->gamepush($gameBuy) );
      redirect($page);
  }

  function removeFromCart(){
      $gametoremove = $this->input->post('smth');
      array_splice($_SESSION['testarray'], $gametoremove, 1);
      redirect('cart');
  }

  function history(){
      $data['purchased'] = $this->Cart_model->gethistoryall($_SESSION['username']);
      $data['page'] = 'history';
      $this->load->view('templates/page', $data);
  }

  function promocode(){

    if(count ($this->Cart_model->promocode($this->input->post('promo')))> 0){

      $data['codetext'] = '<p>Code Accepted!</p>';
  }
    else{
    $data['codetext'] = '<p>Code Invalid!</p>';
  }
  redirect('cart', $data);
  }

}
