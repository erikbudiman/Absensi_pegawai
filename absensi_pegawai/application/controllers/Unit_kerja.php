<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_kerja extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_unit_kerja');
        $this->auth->cek_login();
    }
    
    public function index()
    {
        $this->form_validation->set_rules('unit_kerja', 'Unit_kerja', 'trim|required', [
            'required'  => '%s Harus Di Isi'
        ]);

        if( $this->form_validation->run() ) {
            $data['unit_kerja'] = $this->input->post('unit_kerja');
            $this->m_unit_kerja->tambah($data);
            $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
        }
        
        $unit_kerja = $this->m_unit_kerja->index();
        $data = [
            'title'     => 'Data Unit_kerja',
            'unit_kerja'   => $unit_kerja,
            'content'   => 'unit_kerja/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('unit_kerja', 'Unit_kerja', 'trim|required', [
            'required'  => '%s Harus Di Isi'
        ]);

        if( $this->form_validation->run() ) {
            $data = [
                'id'        => $id,
                'unit_kerja'   => $this->input->post('unit_kerja')
            ];
            $this->m_unit_kerja->update($data);
            $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
            redirect(site_url('unit_kerja'));
        }

        $unit_kerja = $this->m_unit_kerja->edit($id);
        $data = [
            'title'     => 'Edit Unit_kerja',
            'unit_kerja'   => $unit_kerja,
            'content'   => 'unit_kerja/edit'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function hapus($id)
    {
        $this->m_unit_kerja->hapus($id);
        $this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
        redirect(site_url('unit_kerja'));
    }

}

/* End of file Unit_kerja.php */

?>