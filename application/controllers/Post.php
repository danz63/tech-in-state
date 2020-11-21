<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->;
    }

    public function index()
    {
        $data = [
            'title' => 'Manajemen Menu',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'menu' => $this->db->get('menu')->result_array()
        ];
        $this->load->view('backend/menu/index', $data);
    }
}
