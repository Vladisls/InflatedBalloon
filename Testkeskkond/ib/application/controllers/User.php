<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
 }
 public function index()
 {
  if(($this->session->userdata('user_name')!=""))
  {
   $this->welcome();
  }
  else{
   $data['title']= 'Home';
   $this->load->view('page/header.php');
    $this->load->view('page/main.php');
    $this->load->view('page/login.php');
	$this->load->view('page/register.php');
    $this->load->view('page/footer.php');
  }
 }
 public function welcome()
 {
  $data['title']= 'Welcome';
  $this->load->view('page/header.php');
    $this->load->view('page/main.php');
    $this->load->view('page/user_menu.php');
    $this->load->view('page/footer.php');
 }
 public function thank()
 {

  redirect('', 'refresh');

 }
 public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules

  $this->form_validation->set_rules('email_r', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password_r', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password_r', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->Login_model->add_user();
   $this->thank();
  }
 }

}
?>