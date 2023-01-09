<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->model('M_Auth');
    }

    public function index()
    {
        $this->load->view('admin/v_login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $pass   = $this->input->post('password');
        $cek = $this->M_Auth->cek_login($username,$pass);

        if($cek->num_rows() > 0){
            foreach ($cek ->result() as $atr) {
                
                $sess['id_user'] = $atr->id_user;
                $sess['username'] = $atr->username;
                $this->session->set_userdata($sess);

                // echo var_export($this->session->userdata());
                echo "<script> javascript:alert('welcome " . $atr->username . "! :) '); </script>";
                redirect('admin','refresh');
            }
        }
        else {
            echo "<script> javascript:alert('username atau password salah, silahkan login ulang :( '); </script>";
            redirect('login', 'refresh');
        }
    }

    public function logout()
    {
        echo "<script> javascript:alert('logout berhasil! '); </script>";
        session_destroy();
        redirect('', 'refresh');
    }
}