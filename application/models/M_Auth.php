<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Auth extends CI_Model
{ 
  
  public function cek_login($u,$p)
  {
    return $this->db->get_where('user', array('username' => $u , 'password' => $p));
  }

}