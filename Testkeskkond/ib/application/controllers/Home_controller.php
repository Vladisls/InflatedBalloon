<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('page/header.php');
		$this->load->view('page/main.php');
		$this->load->view('page/login.php');
		$this->load->view('page/footer.php');
	}
}
