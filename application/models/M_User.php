<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{

	public function getAllUsers()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}
 
	public function insertuser($user)
	{
		$this->db->insert('user', $user);
	}
 
	public function getUser($id)
	{
		$query = $this->db->get_where('user',array('id_user' => $id));
		return $query->row_array();
	}
 
	public function updateuser($user, $id)
	{
		$this->db->where('user.id_user', $id);
		$this->db->update('user', $user);
	}
 
	public function deleteuser($id)
	{
		$this->db->where('user.id_user', $id);
		$this->db->delete('user');
	}
 
}