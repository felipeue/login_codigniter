<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Success extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('success_view', $data);
   }
   else
   {
     redirect('auth', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('success', 'refresh');
 }
 
}
 
?>