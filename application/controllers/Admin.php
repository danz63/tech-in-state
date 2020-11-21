<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar()
        ];
        $this->load->view('backend/admin/index', $data);
    }
}
