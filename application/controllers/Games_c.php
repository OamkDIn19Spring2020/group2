<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Games_model');
  }

  function index()
  {
      $search = $this->input->post('s_game');

      if ($search === NULL){
          $id_game = '%';
      }

      else {
          $id_game =  '%'.$search.'%';
      }

      $data['games'] = $this->Games_model->searchgame($id_game) ;
      $data['page'] = 'games';
      $this->load->view('templates/page', $data);
  }

  function s_index(){
  $search = $this->input->post('search');

  if ($search === NULL){
      $id_s = '%';
  }

  else {
      $id_s =  '%'.$search.'%';
  }

  $data['results'] = $this->Games_model->search($id_s) ;
  $data['page'] = 'games';
  $this->load->view('templates/page', $data);

}
