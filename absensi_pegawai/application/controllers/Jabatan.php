<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_jabatan');
        $this->auth->cek_login();
    }
    
    public function index()
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required', [
            'required'  => '%s Harus Di Isi'
        ]);

        if( $this->form_validation->run() ) {
            $data['jabatan'] = $this->input->post('jabatan');
            $this->m_jabatan->tambah($data);
            $this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
        }
        
        $jabatan = $this->m_jabatan->index();
        $data = [
            'title'     => 'Data Jabatan',
            'jabatan'   => $jabatan,
            'content'   => 'jabatan/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required', [
            'required'  => '%s Harus Di Isi'
        ]);

        if( $this->form_validation->run() ) {
            $data = [
                'id'        => $id,
                'jabatan'   => $this->input->post('jabatan')
            ];
            $this->m_jabatan->update($data);
            $this->session->set_flashdata('success', 'Data Berhasil Di Edit');
            redirect(site_url('jabatan'));
        }

        $jabatan = $this->m_jabatan->edit($id);
        $data = [
            'title'     => 'Edit Jabatan',
            'jabatan'   => $jabatan,
            'content'   => 'jabatan/edit'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function hapus($id)
    {
        $this->m_jabatan->hapus($id);
        $this->session->set_flashdata('success', 'Data Berhasil Di Hapus');
        redirect(site_url('jabatan'));
    }

}

/* End of file Jabatan.php */

?>