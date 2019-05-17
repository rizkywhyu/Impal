<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tanah extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tanah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tanah = $this->Tanah_model->get_all();

        $data = array(
            'tanah_data' => $tanah
        );

        $this->template->load('template','tanah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tanah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'IdTanah' => $row->IdTanah,
		'Luas' => $row->Luas,
		'KetPemilik' => $row->KetPemilik,
		'KetTempat' => $row->KetTempat,
		'KetKondisi' => $row->KetKondisi,
        'TanggalMasuk' => $row->TanggalMasuk,
	    );
            $this->template->load('template','tanah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tanah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tanah/create_action'),
	    'IdTanah' => set_value('IdTanah'),
	    'Luas' => set_value('Luas'),
	    'KetPemilik' => set_value('KetPemilik'),
	    'KetTempat' => set_value('KetTempat'),
	    'KetKondisi' => set_value('KetKondisi'),
        'TanggalMasuk' => set_value('TanggalMasuk'),
	);
        $this->template->load('template','tanah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'IdTanah' => $this->input->post('IdTanah',TRUE),
		'Luas' => $this->input->post('Luas',TRUE),
	    'KetPemilik' => $this->input->post('KetPemilik',TRUE),
		'KetTempat' => $this->input->post('KetTempat',TRUE),
		'KetKondisi' => $this->input->post('KetKondisi',TRUE),
        'TanggalMasuk' => $this->input->post('TanggalMasuk',TRUE),
	    );

            $this->Tanah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tanah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tanah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tanah/update_action'),
		'IdTanah' => set_value('IdTanah', $row->IdTanah),
		'Luas' => set_value('Luas', $row->Luas),
		'KetPemilik' => set_value('KetPemilik', $row->KetPemilik),
		'KetTempat' => set_value('KetTempat', $row->KetTempat),
		'KetKondisi' => set_value('KetKondisi', $row->KetKondisi),
        'TanggalMasuk' => set_value('TanggalMasuk', $row->TanggalMasuk),
	    );
            $this->template->load('template','tanah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tanah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('IdTanah', TRUE));
        } else {
            $data = array(
        
		'IdTanah' => $this->input->post('IdTanah',TRUE),
		'Luas' => $this->input->post('Luas',TRUE),
		'KetPemilik' => $this->input->post('KetPemilik',TRUE),
		'KetTempat' => $this->input->post('KetTempat',TRUE),
        
	    );

            $this->Barang_model->update($this->input->post('IdTanah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tanah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tanah_model->get_by_id($id);

        if ($row) {
            $this->Tanah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tanah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tanah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Luas', 'Luas', 'trim|required');
	$this->form_validation->set_rules('KetPemilik', 'ket pemilik', 'trim|required');
	$this->form_validation->set_rules('KetTempat', 'ket tempat', 'trim|required');
	$this->form_validation->set_rules('KetKondisi', 'ket kondisi', 'trim|required');
    $this->form_validation->set_rules('TanggalMasuk', 'tanggal masuk', 'trim|required');
	$this->form_validation->set_rules('IdTanah', 'IdTanah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tanah.doc");

        $data = array(
            'tanah_data' => $this->Tanah_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tanah_doc',$data);
    }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */