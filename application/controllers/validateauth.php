<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ValidateAuth extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   if($this->form_validation->run() == FALSE)
   {
     $this->load->view('auth_view');
   }
   else
   {
     redirect('success', 'refresh');
   }

 }

 function check_database($password)
 {
   $username = $this->input->post('username');
   $result = $this->user->login($username, $password);
   if($result)
   {
     $a = array();
     foreach($result as $row)
     {
       $a = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $a);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Nombre o contraseña invalido');
     return false;
   }
 }
}
?>