<?php if ( ! defined('BASEPATH')) exit('');

class ValidateAuth extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', '');
   $this->form_validation->set_rules('password', 'Password', '');
   if($this->form_validation->run() == FALSE)
   {
     $this->load->view('auth_view');
   }
   else
   {
     redirect('success', 'refresh');
   }
 }

 function validatedb($password)
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
       $this->session->set_userdata('data', $a);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('validatedb', 'Usuario o contraseña invalido');
     return false;
   }
 }
}
?>