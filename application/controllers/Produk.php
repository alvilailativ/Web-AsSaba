<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_produk');
	}
	
	public function insert()
	{
		$config['upload_path']      = './assets/produk/';
        $config['allowed_types']    = 'jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->upload->do_upload('img');
		$image = $this->upload->data(); //menyimpan data image ke variable $image
		
		$produk['nama'] = $this->input->post('nama');
		$produk['link'] = $this->input->post('link');
		$produk['id_user'] = $this->input->post('id_user');

		$query = $this->M_produk->insertproduk($produk, $image);
		echo "<script> javascript:alert('data berhasil ditambahkan'); </script>";
		redirect('produk', 'refresh');
	}
 
	public function update($id)
	{
		
		$config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->upload->do_upload('img');
		$image = $this->upload->data(); //menyimpan data image ke variable $image
		
		$produk['nama'] = $this->input->post('nama');
		$produk['link'] = $this->input->post('link');
		$produk['id_user'] = $this->input->post('id_user');

		// echo "<pre>" . var_export($produk, TRUE) . "</pre>";
		// echo "<pre>" . var_export($image, TRUE) . "</pre>";
 
		$query = $this->M_produk->updateproduk($produk, $id, $image);
		echo "<script> javascript:alert('data berhasil diupdate'); </script>";
		redirect('produk', 'refresh');
	}
 
	public function delete($id)
	{
		$query = $this->M_produk->deleteproduk($id);
		echo "<script> javascript:alert('data berhasil dihapus'); </script>";
		redirect('produk', 'refresh');
	}
}
