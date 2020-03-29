<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Games');
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

      $data['games'] = $this->Category_model->sortcat($id_game) ;
      $data['page'] = 'games';
      $this->load->view('templates/page', $data);
  }

}
