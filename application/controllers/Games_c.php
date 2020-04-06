<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Games_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Games_model');
  }

  function s_index(){
  $search = $this->input->post('search');

  if ($search === NULL){
      $id_s = '%';
  }

  else {
      $id_s =  '%'.$search.'%';
  }

  $releaseorder = $this->input->post('greatless');
  $data['befaft'] = $releaseorder;

  if($releaseorder === NULL){
      $datesort = '>';
  }
  else {
      $datesort = $releaseorder;
  }

  $datesearch = $this->input->post('search_date');
  $data['datum'] = $datesearch;

  if($datesearch === NULL){
      $start_date = '1970-01-01';
  }
  else {
      $start_date = $datesearch;
  }

  $sortby = $this->input->post('sortby');
  $data['sortedlist'] = $sortby;

  if ($sortby===NULL) {
    $order = 'idGame, price desc';
  }
  else {
      $order = $sortby;
  }



  $data['games'] = $this->Games_model->search($id_s, $datesort, $start_date, $order);
  $data['page'] = 'games';
  $this->load->view('templates/page', $data);
}

}
