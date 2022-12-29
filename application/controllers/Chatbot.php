<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatbot extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_chatbot');
	}
   
	public function insert()
	{
		$chatbot['id_chatbot'] = $this->input->post('id_chatbot');
		$chatbot['pertanyaan'] = $this->input->post('pertanyaan');
		$chatbot['response']   = $this->input->post('response');
        $chatbot['id_user']    = $this->input->post('id_user');
 
		$query = $this->M_chatbot->insertchatbot($chatbot);
		echo "<script> javascript:alert('data berhasil ditambahkan'); </script>";
		redirect('chatbots', 'refresh');

	}
	
	public function update($id)
	{
		$chatbot['pertanyaan'] = $this->input->post('pertanyaan');
		$chatbot['response']   = $this->input->post('response');
 
		$query = $this->M_chatbot->updatechatbot($chatbot, $id);
		echo "<script> javascript:alert('data berhasil diubah'); </script>";
		redirect('chatbots', 'refresh');
 
	}
 
	public function delete($id)
	{
		$query = $this->M_chatbot->deletechatbot($id);
		echo "<script> javascript:alert('data berhasil dihapus'); </script>";
		redirect('chatbots', 'refresh');
	}
}
