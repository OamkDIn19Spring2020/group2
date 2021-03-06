<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Category_model');
  }

  function index()
  {
    $search = $this->input->post('cat');
    if ($search === NULL){
        $cat = '%';
    }
    else {
        $cat =  '%'.$search.'%';
    }
    $data['cats'] = $this->Category_model->sortcat($cat) ;
    $data['page'] = 'category';
    $this->load->view('templates/page', $data);
  }

}
