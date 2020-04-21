<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_c extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  function index($gname = null)
  {

      if(strpos($gname, '%C3%A4')){
          $data['loadinfo'] = str_replace('%C3%A4', 'ä', $gname);
      }
      elseif (strpos($gname, '%C3%B6')) {
          $data['loadinfo'] = str_replace('%C3%B6', 'ö', $gname);
      }
      else{
      $data['loadinfo'] = $gname;
      }

      $data['page']  = 'aboot';
      $this->load->view('templates/page', $data);

  }

}
