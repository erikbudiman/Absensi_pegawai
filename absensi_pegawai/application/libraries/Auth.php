<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_admin');
    }

    public function login($username, $password)
    {
        $admin = $this->ci->m_admin->login($username, $password);
        if ( $admin ) {
            $data = [
                'id'        => $admin->id,
                'username'  => $username
            ];
            $this->ci->session->set_userdata( $data );
            redirect(site_url('dashboard'), 'refresh');
        } elseif( !$admin ) {
            $this->ci->session->set_flashdata('error', 'Username atau Password Salah');
        } else {
            $this->ci->session->set_flashdata('error', 'Username atau Password Salah');
        }
    }

    public function cek_login()
    {
        if ( $this->ci->session->userdata('username') == '' ) {
            $this->ci->session->set_flashdata('warning', 'Anda Belum Login!!');
            redirect(site_url('login'), 'refresh');
        }
    }

    public function logout()
    {
        $this->ci->session->sess_destroy();
        $this->ci->session->set_flashdata('success', 'Anda Berhasil Logout');
        redirect(site_url('login'), 'refresh');
    }

}

/* End of file Auth.php */

?>