<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Galeri extends CI_Model
{
	
	public function getAllGaleri()
	{
		$query = $this->db->get('galeri');
		return $query->result_array();
	}

	public function insertgaleri($galeri, $image)
	{
		$allowed = array('jpeg', 'jpg', 'png');
		$type    = $image['image_type'];

		// jika file merupakan image dengan type jpg/jpeg/png
		if(in_array($type, $allowed)) {
			$galeri['foto_galeri'] = $image['file_name']; // nama file image
				
			$this->db->insert('galeri', $galeri);
			return TRUE;// mengembalikan nilai true
		}
		// jika yang diupload bukan file image type jpg/jpeg/png
		else {
			return FALSE;// maka mengembalikan nilai false
		}
	}
 
	public function getGaleri($id)
	{
		$query = $this->db->get_where('galeri',array('id_galeri' => $id));
		return $query->row_array();
	}
 
	public function updategaleri($galeri, $id, $image)
	{
		$allowed = array('jpeg', 'jpg', 'png');
		$type    = $image['image_type'];
   
		// jika file merupakan image dengan type jpg/jpeg/png
		if(in_array($type, $allowed)) {
			$galeri['foto_galeri'] = $image['file_name']; // nama file image
	
			$this->db->where('galeri.id_galeri', $id);
			$this->db->update('galeri', $galeri);
			return TRUE;// mengembalikan nilai true
		}
		// jika yang diupload bukan file image type jpg/jpeg/png
		else {
			return FALSE;// maka mengembalikan nilai false
		}
	}
 
	public function deletegaleri($id)
	{
		$this->db->where('galeri.id_galeri', $id);
		$this->db->delete('galeri');
	}
 
}