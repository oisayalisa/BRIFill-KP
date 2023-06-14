<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_M');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
        $this->load->library('passwordhash'); //buat hash
    }

    public function index()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer'); 
        $this->load->view('c_user/tb_user_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->User_M->json();
    }

    public function read($id) 
    {
        $row = $this->User_M->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'nama' => $row->nama,
		'username' => $row->username,
		'level' => $row->level,
		'unit' => $row->unit,
		'no_hp' => $row->no_hp,
		'password' => $row->password,
	    );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/footer'); 
            $this->load->view('c_user/tb_user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('c_user/create_action'),
	    'id_user' => set_value('id_user'),
	    'nama' => set_value('nama'),
	    'username' => set_value('username'),
	    'level' => set_value('level'),
	    'unit' => set_value('unit'),
	    'no_hp' => set_value('no_hp'),
	    'password' => set_value('password'),
	);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/footer'); 
        $this->load->view('c_user/tb_user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'username' => $this->input->post('username',TRUE),
		'level' => $this->input->post('level',TRUE),
		'unit' => $this->input->post('unit',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		// 'password' => $this->input->post('password',TRUE),
        'password' => password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT),
	    );

            $this->User_M->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('c_user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_M->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('c_user/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'nama' => set_value('nama', $row->nama),
		'username' => set_value('username', $row->username),
		'level' => set_value('level', $row->level),
		'unit' => set_value('unit', $row->unit),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'password' => set_value('password', $row->password),
	    );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/footer'); 
            $this->load->view('c_user/tb_user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'username' => $this->input->post('username',TRUE),
		'level' => $this->input->post('level',TRUE),
		'unit' => $this->input->post('unit',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		// 'password' => $this->input->post('password',TRUE),
        'password' => password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT),
	    );

            $this->User_M->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('c_user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_M->get_by_id($id);

        if ($row) {
            $this->User_M->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('c_user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('unit', 'unit', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file C_user.php */
/* Location: ./application/controllers/C_user.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-06-14 10:21:28 */
/* http://harviacode.com */