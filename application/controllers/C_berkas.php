<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_berkas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_berkas');
        $this->load->library('form_validation');        
	    $this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/footer');
        $this->load->view('c_berkas/tb_berkas_list');       
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->M_berkas->json();
    }

    public function read($id) 
    {
        $row = $this->M_berkas->get_by_id($id);
        if ($row) {
            $data = array(
		'id_berkas' => $row->id_berkas,
		'no_rek' => $row->no_rek,
		'nama_debitur' => $row->nama_debitur,
		'plafond' => $row->plafond,
		'nama_mantri' => $row->nama_mantri,
		'lemari' => $row->lemari,
		'rak' => $row->rak,
		'no_berkas' => $row->no_berkas,
	    );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('c_berkas/tb_berkas_read', $data);
            $this->load->view('admin/footer');
        
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_berkas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('c_berkas/create_action'),
	    'id_berkas' => set_value('id_berkas'),
	    'no_rek' => set_value('no_rek'),
	    'nama_debitur' => set_value('nama_debitur'),
	    'plafond' => set_value('plafond'),
	    'nama_mantri' => set_value('nama_mantri'),
	    'lemari' => set_value('lemari'),
	    'rak' => set_value('rak'),
	    'no_berkas' => set_value('no_berkas'),
	);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('c_berkas/tb_berkas_form', $data);
        $this->load->view('admin/footer');

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_rek' => $this->input->post('no_rek',TRUE),
		'nama_debitur' => $this->input->post('nama_debitur',TRUE),
		'plafond' => $this->input->post('plafond',TRUE),
		'nama_mantri' => $this->input->post('nama_mantri',TRUE),
		'lemari' => $this->input->post('lemari',TRUE),
		'rak' => $this->input->post('rak',TRUE),
		'no_berkas' => $this->input->post('no_berkas',TRUE),
	    );

            $this->M_berkas->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('c_berkas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_berkas->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('c_berkas/update_action'),
		'id_berkas' => set_value('id_berkas', $row->id_berkas),
		'no_rek' => set_value('no_rek', $row->no_rek),
		'nama_debitur' => set_value('nama_debitur', $row->nama_debitur),
		'plafond' => set_value('plafond', $row->plafond),
		'nama_mantri' => set_value('nama_mantri', $row->nama_mantri),
		'lemari' => set_value('lemari', $row->lemari),
		'rak' => set_value('rak', $row->rak),
		'no_berkas' => set_value('no_berkas', $row->no_berkas),
	    );
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('c_berkas/tb_berkas_form', $data);
            $this->load->view('admin/footer');
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_berkas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_berkas', TRUE));
        } else {
            $data = array(
		'no_rek' => $this->input->post('no_rek',TRUE),
		'nama_debitur' => $this->input->post('nama_debitur',TRUE),
		'plafond' => $this->input->post('plafond',TRUE),
		'nama_mantri' => $this->input->post('nama_mantri',TRUE),
		'lemari' => $this->input->post('lemari',TRUE),
		'rak' => $this->input->post('rak',TRUE),
		'no_berkas' => $this->input->post('no_berkas',TRUE),
	    );

            $this->M_berkas->update($this->input->post('id_berkas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('c_berkas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_berkas->get_by_id($id);

        if ($row) {
            $this->M_berkas->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('c_berkas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('c_berkas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_rek', 'no rek', 'trim|required');
	$this->form_validation->set_rules('nama_debitur', 'nama debitur', 'trim|required');
	$this->form_validation->set_rules('plafond', 'plafond', 'trim|required');
	$this->form_validation->set_rules('nama_mantri', 'nama mantri', 'trim|required');
	$this->form_validation->set_rules('lemari', 'lemari', 'trim|required');
	$this->form_validation->set_rules('rak', 'rak', 'trim|required');
	$this->form_validation->set_rules('no_berkas', 'no berkas', 'trim|required');

	$this->form_validation->set_rules('id_berkas', 'id_berkas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tb_berkas.xls";
        $judul = "tb_berkas";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "No Rek");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Debitur");
	xlsWriteLabel($tablehead, $kolomhead++, "Plafond");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Mantri");
	xlsWriteLabel($tablehead, $kolomhead++, "Lemari");
	xlsWriteLabel($tablehead, $kolomhead++, "Rak");
	xlsWriteLabel($tablehead, $kolomhead++, "No Berkas");

	foreach ($this->M_berkas->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_rek);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_debitur);
	    xlsWriteNumber($tablebody, $kolombody++, $data->plafond);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_mantri);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lemari);
	    xlsWriteNumber($tablebody, $kolombody++, $data->rak);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_berkas);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file C_berkas.php */
/* Location: ./application/controllers/C_berkas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-05-17 07:42:22 */
/* http://harviacode.com */