<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Games_model');
    $this->load->model('Aboot_model');
    $this->load->model('Users_model');
    $this->load->model('Category_model');
    $this->load->model('Cart_model');
    $this->load->database();
  }

  function content($page = 'sales')
  {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
  {
          // Whoops, we don't have a page for that!
          $data['page'] = show_404();
          $this->load->view('templates/page', $data);
  }
    $period = '7';
    $data['sales'] = $this->Games_model->getsales();
    $data['games'] = $this->Games_model->getgames();
    $data['user'] = $this->Aboot_model->getusers();
    $data['cats'] = $this->Category_model->sortcat();
    $data['hot'] = $this->Games_model->gethot($period);
    if(isset ($_SESSION['username'])){
      $data['userinfo'] = $this->Users_model->getuserinfo($_SESSION['username']);
    }
    $data['page'] = $page;
    $this->load->view('templates/page', $data);

  }

  function logout(){
      session_destroy();
      $_SESSION['logged_in']=false;
      redirect('sales');
  }

  public function deleteuser()
  {
    $this->db->delete('history', array('username' => $_SESSION['username']));
    $this->db->delete('user', array('username' => $_SESSION['username']));
    session_destroy();
    $_SESSION['logged_in']=false;
    redirect('sales');
  }

}
