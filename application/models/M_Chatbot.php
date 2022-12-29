<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Chatbot extends CI_Model
{

	public function getAllChatbot()
	{
		$query = $this->db->get('chatbot');
		return $query->result_array();
	}

	public function insertchatbot($chatbot)
	{
		$this->db->insert('chatbot', $chatbot);
	}

	public function getChatbot($id)
	{
		$query = $this->db->get_where('chatbot', array('id_user' => $id));
		return $query->row_array();
	}

	public function updatechatbot($chatbot, $id)
	{
		$this->db->where('chatbot.id_chatbot', $id);
		$this->db->update('chatbot', $chatbot);
	}

	public function deletechatbot($id)
	{
		$this->db->where('chatbot.id_chatbot', $id);
		$this->db->delete('chatbot');
	}
}