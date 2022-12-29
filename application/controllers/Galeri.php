<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_galeri');
	}
	
	public function insert()
	{
		$galeri['id_galeri'] = $this->input->post('id_galeri');
		
		$config['upload_path']      = './assets/galeri/';
        $config['allowed_types']    = 'jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->upload->do_upload('img');
		$image = $this->upload->data(); //menyimpan data image ke variable $image
		
		$galeri['deskripsi'] = $this->input->post('deskripsi');
		$galeri['title'] = $this->input->post('title');
		$galeri['id_user'] = $this->input->post('id_user');

		$query = $this->M_galeri->insertgaleri($galeri, $image);
		echo "<script> javascript:alert('data berhasil ditambahkan'); </script>";
		redirect('galeri', 'refresh');
	}
 
	public function update($id)
	{
		
		$config['upload_path']      = './assets/galeri/';
        $config['allowed_types']    = 'jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->upload->do_upload('img');
		$image = $this->upload->data(); //menyimpan data image ke variable $image
		
		$galeri['deskripsi'] = $this->input->post('deskripsi');
		$galeri['title'] = $this->input->post('title');
		$galeri['id_user'] = $this->input->post('id_user');
 
		$query = $this->M_galeri->updategaleri($galeri, $id, $image);
		echo "<script> javascript:alert('data berhasil diupdate'); </script>";
		redirect('galeri', 'refresh');
	}
 
	public function delete($id)
	{
		$query = $this->M_galeri->deletegaleri($id);
		echo "<script> javascript:alert('data berhasil dihapus'); </script>";
		redirect('galeri', 'refresh');
	}
}
