<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function login($username, $password)
    {
        $where = [
            'username'  => $username,
            'password'  => sha1($password)
        ];
        return $this->db->get_where('admin', $where)->row();
    }

}

/* End of file M_admin.php */

?>