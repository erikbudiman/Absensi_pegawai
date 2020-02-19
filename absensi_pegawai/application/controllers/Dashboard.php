<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->auth->cek_login();
    }
    
    public function index()
    {
        $data = [
            'title'     => 'Dashboard',
            'content'   => 'dashboard/index'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }

}

/* End of file Dashboard.php */

?>