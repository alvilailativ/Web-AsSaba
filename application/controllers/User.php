<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_user');
	}
   
	public function insert()
	{
		$user  = $this->input->post();
		$query = $this->M_user->insertuser($user);

		echo "<script> javascript:alert('data berhasil ditambahkan'); </script>";
		redirect('user', 'refresh');

	}
	
	public function update($id)
	{
		$user = $this->input->post();
		$query = $this->M_user->updateuser($user, $id);

		echo "<script> javascript:alert('data berhasil diubah'); </script>";
		redirect('user', 'refresh');
 
	}
 
	public function delete($id)
	{
		$query = $this->M_user->deleteuser($id);

		echo "<script> javascript:alert('data berhasil dihapus'); </script>";
		redirect('user', 'refresh');
	}
}
