<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');     
        $this->load->model('M_user');
        $this->load->model('M_produk');
        $this->load->model('M_galeri');
        $this->load->model('M_chatbot');
	}
    
    public function index()
    {
		$data['title'] = "Dashboard";

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
        $this->load->view('admin/index', $data);
		$this->load->view('admin/template/footer');
    }

    public function userPage()
    {
		$data['title'] = "Page User";
		$data['user']  = $this->M_user->getAllUsers();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/user/v_user', $data);
		$this->load->view('admin/template/footer');
	}
	public function addUser()
	{
		$this->load->view('admin/user/add_user');
	}
	public function editUser($id)
	{
		$data['user'] = $this->M_user->getUser($id);

		$this->load->view('admin/user/edit_user', $data);
	}


    public function produkPage()
    {
		$data['title']  = "Page Produk";
		$data['produk'] = $this->M_produk->getAllProduk();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/produk/v_produk', $data);
		$this->load->view('admin/template/footer');
	}
	public function addProduk()
	{
		$this->load->view('admin/produk/add_produk');
	}
	public function editProduk($id)
	{
		$data['produk'] = $this->M_produk->getProduk($id);
		$this->load->view('admin/produk/edit_produk', $data);
	}


    public function galeriPage()
    {
		$data['title']  = "Page Galery";
		$data['galeri'] = $this->M_galeri->getAllGaleri();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/galeri/v_galeri', $data);
		$this->load->view('admin/template/footer');
	}
	public function addGaleri()
	{
		$this->load->view('admin/galeri/add_galeri');
	}
	public function editGaleri($id)
	{
		$data['galeri'] = $this->M_galeri->getGaleri($id);

		$this->load->view('admin/galeri/edit_galeri', $data);
	}


    public function chatbotPage()
    {
		$data['title']   = "Page Chatbot";
		$data['chatbot'] = $this->M_chatbot->getAllChatbot();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/chatbot/v_chatbot', $data);
		$this->load->view('admin/template/footer');
	}
	public function addChatbot()
	{
		$this->load->view('admin/chatbot/add_chatbot');
	}
	public function editChatbot($id)
	{
		$data['chatbot'] = $this->M_chatbot->getChatbot($id);

		$this->load->view('admin/chatbot/edit_chatbot', $data);
	}
    
}