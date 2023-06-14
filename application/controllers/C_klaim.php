<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_klaim extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_klaim');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');   
		$this->load->view('C_jamkrindo/surat_klaim');
		
    } 

    
    public function json() {
        header('Content-Type: application/json');
        echo $this->M_klaim->json();
    }

    public function read($id) 
    {
        $row = $this->M_jamkrindo->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'alamat' => $row->alamat,
		'no_ktp' => $row->no_ktp,
		'no_rek' => $row->no_rek,
		'no_sph' => $row->no_sph,
		'no_sertif' => $row->no_sertif,
		'tgl_sertif' => $row->tgl_sertif,
		'plafon' => $row->plafon,
		'nilai_penjaminan' => $row->nilai_penjaminan,
		'payoff' => $row->payoff,
		'pokok_kredit' => $row->pokok_kredit,
		'tunggakan_bunga' => $row->tunggakan_bunga,
		'nama_kaunit' => $row->nama_kaunit,
		'nama_mantri' => $row->nama_mantri,
		'nama_cs' => $row->nama_cs,
		'tgl' => $row->tgl,
	    );
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('c_jamkrindo/tb_jamkrindo_read', $data);
			$this->load->view('admin/footer');    
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_jamkrindo'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('c_jamkrindo/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'alamat' => set_value('alamat'),
	    'no_ktp' => set_value('no_ktp'),
	    'no_rek' => set_value('no_rek'),
	    'no_sph' => set_value('no_sph'),
	    'no_sertif' => set_value('no_sertif'),
	    'tgl_sertif' => set_value('tgl_sertif'),
	    'plafon' => set_value('plafon'),
	    'nilai_penjaminan' => set_value('nilai_penjaminan'),
	    'payoff' => set_value('payoff'),
	    'pokok_kredit' => set_value('pokok_kredit'),
	    'tunggakan_bunga' => set_value('tunggakan_bunga'),
	    'nama_kaunit' => set_value('nama_kaunit'),
	    'nama_mantri' => set_value('nama_mantri'),
	    'nama_cs' => set_value('nama_cs'),
	    'tgl' => set_value('tgl'),
	);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('c_jamkrindo/tb_jamkrindo_form', $data);
		$this->load->view('admin/footer');  
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_ktp' => $this->input->post('no_ktp',TRUE),
		'no_rek' => $this->input->post('no_rek',TRUE),
		'no_sph' => $this->input->post('no_sph',TRUE),
		'no_sertif' => $this->input->post('no_sertif',TRUE),
		'tgl_sertif' => $this->input->post('tgl_sertif',TRUE),
		'plafon' => $this->input->post('plafon',TRUE),
		'nilai_penjaminan' => $this->input->post('nilai_penjaminan',TRUE),
		'payoff' => $this->input->post('payoff',TRUE),
		'pokok_kredit' => $this->input->post('pokok_kredit',TRUE),
		'tunggakan_bunga' => $this->input->post('tunggakan_bunga',TRUE),
		'nama_kaunit' => $this->input->post('nama_kaunit',TRUE),
		'nama_mantri' => $this->input->post('nama_mantri',TRUE),
		'nama_cs' => $this->input->post('nama_cs',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
	    );

            $this->M_jamkrindo->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('c_jamkrindo'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_jamkrindo->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('c_jamkrindo/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'no_ktp' => set_value('no_ktp', $row->no_ktp),
		'no_rek' => set_value('no_rek', $row->no_rek),
		'no_sph' => set_value('no_sph', $row->no_sph),
		'no_sertif' => set_value('no_sertif', $row->no_sertif),
		'tgl_sertif' => set_value('tgl_sertif', $row->tgl_sertif),
		'plafon' => set_value('plafon', $row->plafon),
		'nilai_penjaminan' => set_value('nilai_penjaminan', $row->nilai_penjaminan),
		'payoff' => set_value('payoff', $row->payoff),
		'pokok_kredit' => set_value('pokok_kredit', $row->pokok_kredit),
		'tunggakan_bunga' => set_value('tunggakan_bunga', $row->tunggakan_bunga),
		'nama_kaunit' => set_value('nama_kaunit', $row->nama_kaunit),
		'nama_mantri' => set_value('nama_mantri', $row->nama_mantri),
		'nama_cs' => set_value('nama_cs', $row->nama_cs),
		'tgl' => set_value('tgl', $row->tgl),
	    );
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('c_jamkrindo/tb_jamkrindo_form', $data);
			$this->load->view('admin/footer');       
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_jamkrindo'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_ktp' => $this->input->post('no_ktp',TRUE),
		'no_rek' => $this->input->post('no_rek',TRUE),
		'no_sph' => $this->input->post('no_sph',TRUE),
		'no_sertif' => $this->input->post('no_sertif',TRUE),
		'tgl_sertif' => $this->input->post('tgl_sertif',TRUE),
		'plafon' => $this->input->post('plafon',TRUE),
		'nilai_penjaminan' => $this->input->post('nilai_penjaminan',TRUE),
		'payoff' => $this->input->post('payoff',TRUE),
		'pokok_kredit' => $this->input->post('pokok_kredit',TRUE),
		'tunggakan_bunga' => $this->input->post('tunggakan_bunga',TRUE),
		'nama_kaunit' => $this->input->post('nama_kaunit',TRUE),
		'nama_mantri' => $this->input->post('nama_mantri',TRUE),
		'nama_cs' => $this->input->post('nama_cs',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
	    );

            $this->M_jamkrindo->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('c_jamkrindo'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_jamkrindo->get_by_id($id);

        if ($row) {
            $this->M_jamkrindo->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('c_jamkrindo'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_jamkrindo'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_ktp', 'no ktp', 'trim|required');
	$this->form_validation->set_rules('no_rek', 'no rek', 'trim|required');
	$this->form_validation->set_rules('no_sph', 'no sph', 'trim|required');
	$this->form_validation->set_rules('no_sertif', 'no sertif', 'trim|required');
	$this->form_validation->set_rules('tgl_sertif', 'tgl sertif', 'trim|required');
	$this->form_validation->set_rules('plafon', 'plafon', 'trim|required');
	$this->form_validation->set_rules('nilai_penjaminan', 'nilai penjaminan', 'trim|required');
	$this->form_validation->set_rules('payoff', 'payoff', 'trim|required');
	$this->form_validation->set_rules('pokok_kredit', 'pokok kredit', 'trim|required');
	$this->form_validation->set_rules('tunggakan_bunga', 'tunggakan bunga', 'trim|required');
	$this->form_validation->set_rules('nama_kaunit', 'nama kaunit', 'trim|required');
	$this->form_validation->set_rules('nama_mantri', 'nama mantri', 'trim|required');
	$this->form_validation->set_rules('nama_cs', 'nama cs', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }





	public function print($id) 
    {
		
        $row = $this->M_jamkrindo->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('c_jamkrindo/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'no_ktp' => set_value('no_ktp', $row->no_ktp),
		'no_rek' => set_value('no_rek', $row->no_rek),
		'no_sph' => set_value('no_sph', $row->no_sph),
		'no_sertif' => set_value('no_sertif', $row->no_sertif),
		'tgl_sertif' => set_value('tgl_sertif', $row->tgl_sertif),
		'plafon' => set_value('plafon', $row->plafon),
		'nilai_penjaminan' => set_value('nilai_penjaminan', $row->nilai_penjaminan),
		'payoff' => set_value('payoff', $row->payoff),
		'pokok_kredit' => set_value('pokok_kredit', $row->pokok_kredit),
		'tunggakan_bunga' => set_value('tunggakan_bunga', $row->tunggakan_bunga),
		'nama_kaunit' => set_value('nama_kaunit', $row->nama_kaunit),
		'nama_mantri' => set_value('nama_mantri', $row->nama_mantri),
		'nama_cs' => set_value('nama_cs', $row->nama_cs),
		'tgl' => set_value('tgl', $row->tgl),
	    );
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('c_jamkrindo/print', $data);
			$this->load->view('admin/footer');       
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_jamkrindo'));
        }
    }

}

/* End of file C_jamkrindo.php */
/* Location: ./application/controllers/C_jamkrindo.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-20 04:46:22 */
/* http://harviacode.com */