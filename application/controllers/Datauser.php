<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{

    public function index()
    {
        $this->load->model('M_user');

        $data['data_user']= $this->M_user->t_user();

        // var_dump($data);
        // die;

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/user/tampil_user', $data);
        $this->load->view('admin/footer');
    }
}
