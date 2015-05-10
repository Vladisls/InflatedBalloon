<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	 function __construct()
  {
    parent::__construct();
  }
  
	public function index()
	{
		if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['email'] = $session_data['email'];
	 $this->load->view('page/header.php', $data);
	 $this->load->view('page/user_menu.php', $data);
	 $this->load->view('page/main.php', $data);
	 $this->load->view('guest/footer.php');

	 
   }
		else
   {
     //If no session, redirect to login page
	 $this->load->view('guest/header.php');
     $this->load->view('guest/main.php');
     $this->load->view('guest/login.php');
	 $this->load->view('guest/register.php');
	 $this->load->view('guest/footer.php');
   }

	}
	
	function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('', 'refresh');
 }
}
