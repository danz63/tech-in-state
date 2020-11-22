<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'Postingan',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'menu' => $this->db->get('menu')->result_array()
        ];
        $this->load->view('backend/post/index', $data);
    }

    public function insert_image()
    {
        $data = [
            'title' => 'Postingan',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'randomString' => parent::randString()
        ];
        $this->load->view('backend/post/insert_image', $data);
    }

    public function create_post()
    {
        echo "<pre>";
        var_dump($this->input->post());
        $config['upload_path']          = './assets/img/upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload');
        var_dump($_FILES);
        echo "</pre>";
    }
}
