<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('M_ChatResponse');
		$this->load->model('M_produk');
		$this->load->model('M_galeri');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['produk'] = $this->M_produk->getAllProduk();
		$data['galeri'] = $this->M_galeri->getAllGaleri();

		// menampilkan halaman utama bagi user
		// $this->load->view('template/header');
		// $this->load->view('banner');
		// $this->load->view('about');
		// $this->load->view('product');
		// $this->load->view('gallery');
		// $this->load->view('template/footer');
		$this->load->view('index', $data);
	}

	public function response()
	{
		$pesan = $this->input->post('pesan');
		// echo '<pre>'.var_export($pesan).'</pre>';
		
		$response = $this->M_ChatResponse->getResponse($pesan);
		if ($response == NULL) {
			echo "Maaf, aku belum bisa mengerti yang kamu maksud :( <br><br> kamu bisa ketik: <br> - 'harga' untuk mengetahui harga
			<br> - 'deskripsi' untuk mengetahui deskripsi produk <br> - 'sedia' untuk mengetahui ketersediaan produk ";
		}
		else {
			foreach ($response as $chat) {
				echo nl2br($chat) . "<br><br>";
			}
		}
		// echo '<pre>'.var_export($response).'</pre>';
		// echo $response;
	}
}