<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Login_model');
 }
 public function index()
 {
    //$this->load->view('guest/header.php');
    //$this->load->view('guest/main.php');
    //$this->load->view('guest/login.php');
	//$this->load->view('guest/register.php');
    //$this->load->view('guest/footer.php');

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
     
  $this->form_validation->set_rules('email_r', 'Your Email', 'trim|valid_email');
  $this->form_validation->set_rules('password_r', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password_r', 'Password Confirmation', 'trim|required|matches[password_r]');
     
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