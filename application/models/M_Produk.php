<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produk extends CI_Model 
{

	public function getAllProduk()
	{
		$query = $this->db->get('produk');
		return $query->result_array();
	}

	public function insertproduk($produk, $image)
	{
		$allowed = array('jpeg', 'jpg', 'png');
		$type    = $image['image_type'];

		// jika file merupakan image dengan type jpg/jpeg/png
		if(in_array($type, $allowed)) {
			$produk['foto'] = $image['file_name']; // nama file image
			$this->db->insert('produk', $produk);
			return TRUE;// mengembalikan nilai true
		}
		// jika yang diupload bukan file image type jpg/jpeg/png
		else {
			return FALSE;// maka mengembalikan nilai false
		}
	}

	public function getProduk($id)
	{
		$query = $this->db->get_where('produk', array('id_produk' => $id));
		return $query->row_array();
	}

	public function updateproduk($produk, $id, $image)
	{
		$allowed = array('jpeg', 'jpg', 'png');
		$type    = $image['image_type'];

		// jika file merupakan image dengan type jpg/jpeg/png
		if(in_array($type, $allowed)) {
			$produk['foto'] = $image['file_name']; // nama file image
			$this->db->where('produk.id_produk', $id);
			$this->db->update('produk', $produk);
			return TRUE;// mengembalikan nilai true
		}
		// jika yang diupload bukan file image type jpg/jpeg/png
		else {
			return FALSE;// maka mengembalikan nilai false
		}
	}

	public function deleteproduk($id)
	{
		$this->db->where('produk.id_produk', $id);
		return $this->db->delete('produk');
	}

}