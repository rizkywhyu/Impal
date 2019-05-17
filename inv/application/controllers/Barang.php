<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $barang = $this->Barang_model->get_all();

        $data = array(
            'barang_data' => $barang
        );

        $this->template->load('template','barang_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'IdBarang' => $row->IdBarang,
		'NamaBarang' => $row->NamaBarang,
		'Stok' => $row->Stok,
		'KetTempat' => $row->KetTempat,
		'KetKondisi' => $row->KetKondisi,
        'KetPemilik' => $row->KetPemilik,
		'TanggalMasuk' => $row->TanggalMasuk,
	    );
            $this->template->load('template','barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

   

    public function create() 
    {
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
            // 'dd_tempat' => $this->Barang_model->dd_tempat(),
            // 'tempat_selected' => $this->input->post('tempat') ? $this->input->post('tempat') : '',
	    'IdBarang' => set_value('IdBarang'),
	    'NamaBarang' => set_value('NamaBarang'),
	    'Stok' => set_value('Stok'),
	    'KetTempat' => set_value('KetTempat'),
	    'KetKondisi' => set_value('KetKondisi'),
        'KetPemilik' => set_value('KetPemilik'),
	    'TanggalMasuk' => set_value('TanggalMasuk'),
	);
        $this->template->load('template','barang_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'IdBarang' => $this->input->post('IdBarang',TRUE),
		'NamaBarang' => $this->input->post('NamaBarang',TRUE),
		'Stok' => $this->input->post('Stok',TRUE),
		'KetTempat' => $this->input->post('KetTempat',TRUE),
		'KetKondisi' => $this->input->post('KetKondisi',TRUE),
        'KetPemilik' => $this->input->post('KetPemilik',TRUE),
		'TanggalMasuk' => $this->input->post('TanggalMasuk',TRUE),
	    );

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('Barang/update_action'),
		'IdBarang' => set_value('IdBarang', $row->IdBarang),
		'NamaBarang' => set_value('NamaBarang', $row->NamaBarang),
		'Stok' => set_value('Stok', $row->Stok),
		'KetTempat' => set_value('KetTempat', $row->KetTempat),
		'KetKondisi' => set_value('KetKondisi', $row->KetKondisi),
        'KetPemilik' => set_value('KetPemilik', $row->KetPemilik),
		'TanggalMasuk' => set_value('TanggalMasuk', $row->TanggalMasuk),
	    );
            $this->template->load('template','barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('IdBarang', TRUE));
        } else {
            $data = array(
        
		'IdBarang' => $this->input->post('IdBarang',TRUE),
		'NamaBarang' => $this->input->post('NamaBarang',TRUE),
		'Stok' => $this->input->post('Stok',TRUE),
		'KetTempat' => $this->input->post('KetTempat',TRUE),
        'KetKondisi' => $this->input->post('KetKondisi',TRUE),
        'KetPemilik' => $this->input->post('KetPemilik',TRUE),
	    );

            $this->Barang_model->update($this->input->post('IdBarang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }

    public function move($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                 'button' => 'Mutasi',
                 'action' => site_url('Barang/move_action'),
        'IdBarang' => set_value('IdBarang', $row->IdBarang),
        'NamaBarang' => set_value('NamaBarang', $row->NamaBarang),
        'Stok' => set_value('Stok', $row->Stok),
        'KetTempat' => set_value('KetTempat', $row->KetTempat),
        'KetKondisi' => set_value('KetKondisi', $row->KetKondisi),
        'KetPemilik' => set_value('KetPemilik', $row->KetPemilik),
        'TanggalMasuk' => set_value('TanggalMasuk', $row->TanggalMasuk),
        );
            $this->template->load('template','barang_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function move_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->move($this->input->post('IdBarang', TRUE));
        } else {
            $data = array(
        
        'IdBarang' => $this->input->post('IdBarang',TRUE),
        'NamaBarang' => $this->input->post('NamaBarang',TRUE),
        'Stok' => $this->input->post('Stok-"$Stok"',TRUE),
        'KetTempat' => $this->input->post('KetTempat',TRUE),
        'KetPemilik' => $this->input->post('KetPemilik',TRUE),
        'TanggalMasuk' => $this->input->post('TanggalMasuk',TRUE),
        );

            $this->Barang_model->move($this->input->post('IdBarang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NamaBarang', 'nama barang', 'trim|required');
	$this->form_validation->set_rules('Stok', 'stok', 'trim|required');
	$this->form_validation->set_rules('KetTempat', 'ket tempat', 'trim|required');
	$this->form_validation->set_rules('KetKondisi', 'ket kondisi', 'trim|required');
    $this->form_validation->set_rules('KetPemilik', 'ket pemilik', 'trim|required');
	$this->form_validation->set_rules('TanggalMasuk', 'tanggal masuk', 'trim|required');

	$this->form_validation->set_rules('IdBarang', 'IdBarang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "barang.xls";
        $judul = "barang";
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
	xlsWriteLabel($tablehead, $kolomhead++, "NamaBarang");
	xlsWriteLabel($tablehead, $kolomhead++, "Stok");
	xlsWriteLabel($tablehead, $kolomhead++, "KetTempat");
	xlsWriteLabel($tablehead, $kolomhead++, "KetKondisi");
    xlsWriteLabel($tablehead, $kolomhead++, "KetPemilik");
	xlsWriteLabel($tablehead, $kolomhead++, "TanggalMasuk");

	foreach ($this->Barang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Namabarang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Stok);
	    xlsWriteLabel($tablebody, $kolombody++, $data->KetTempat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->KetKondisi);
        xlsWriteLabel($tablebody, $kolombody++, $data->KetPemilik);
	    xlsWriteNumber($tablebody, $kolombody++, $data->TanggalMasuk);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=barang.doc");

        $data = array(
            'barang_data' => $this->Barang_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('barang_doc',$data);
    }
    

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */