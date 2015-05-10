<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('login_model','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
   $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

       if($this->form_validation->run() == FALSE)
       {
         //Field validation failed.  User redirected to login page
         $this->load->view('guest/main.php');
         $this->load->view('guest/login.php');
         $this->load->view('guest/header.php');
         $this->load->view('guest/footer.php');
       }
       else
       {
         //Go to private area
         $session_data = $this->session->userdata('logged_in');
         $data['email'] = $_POST['email'];
         $this->load->view('page/main.php', $data);
         $this->load->view('page/user_menu.php', $data);
         $this->load->view('page/header.php', $data);
         $this->load->view('page/footer.php', $data);
       }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');

   //query the database
   $result = $this->login_model->login($email, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
}
?>