<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password', TRUE);
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $test = password_verify($password, $hashPass);

        // Query cek user   
        $this->db->where('username', $username);
        $users = $this->db->get('tb_user');

        if ($users->num_rows() > 0){
            $user = $users->row_array();
            if (password_verify($password, $user['password'])){
                $this->session->set_userdata('user',$user);
                redirect('Dashboard');
            } else{
                redirect('Auth','refresh');
            }
            
        } else{
            $this->session->set_flashdata('status_login', 'Email atau password yang Anda masukkan salah');
            redirect('Auth','refresh');
        }
          
    }

    public function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
		redirect('Auth','refresh');
	}
}
