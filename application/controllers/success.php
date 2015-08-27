<?php if ( ! defined('BASEPATH')) exit('');
session_start();
class Success extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('data'))
   {
     $session_data = $this->session->userdata('data');
     $data['username'] = $session_data['username'];
     $this->load->view('success_view', $data);
   }
   else
   {
     redirect('form', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('data');
   session_destroy();
   redirect('success', 'refresh');
 }
}

?>