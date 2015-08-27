<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password, nombre, apellido');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
   $query = $this -> db -> get();
   if($query != NULL)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>