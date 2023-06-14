<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$user = $this->session->userdata('user');

        if (!$user) {
            redirect('Auth');
        }

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/isi');
		$this->load->view('admin/footer');
	}

}
