<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Category_model');
  }

  function index()
  {
    $search = $this->input->post('cat');
    $cat =  '%'.$search.'%';
    $data['cat'] = $this->Category_model->sortcat($cat) ;
    print_r(sortcat());
  }

}
