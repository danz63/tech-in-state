<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'Artikel',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'menu' => $this->db->get('menu')->result_array()
        ];
        $this->load->view('backend/article/index', $data);
    }

    public function insert_image()
    {
        $data = [
            'title' => 'Artikel',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'randomString' => parent::randString()
        ];
        $this->load->view('backend/article/insert_image', $data);
    }

    public function create_article()
    {
        if (isset($_FILES['image'])) {
            if ($_FILES['image']['error'][0] == 0) {
                $this->upload_image();
            }
        }
        $this->load->model('Data_Handler', 'dataHandler');
        $data = [
            'title' => 'Artikel',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'images' => $this->dataHandler->getLastImage(),
            'categories' => $this->dataHandler->getCategories()
        ];
        $this->load->view('backend/article/create_article', $data);
    }

    public function store_article()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('content', 'Konten', 'required');
    }

    public function upload_image()
    {
        for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
            if ($_FILES['image']['name'][$i] == 0) {
                $split = explode('.', $_FILES['image']['name'][$i]);
                $name = $this->input->post('str') . "_" . time() . "_" . $i . "." . $split[count($split) - 1];
                $_FILES['file']['name']     = $name;
                $_FILES['file']['type']     = $_FILES['image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['image']['error'][$i];
                $_FILES['file']['size']     = $_FILES['image']['size'][$i];

                $config['upload_path']      = './assets/img/picture/';
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                $config['max_size']         = str_replace("M", "000", ini_get('upload_max_filesize'));
                $config['file_name']        = $name;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $this->db->insert('image', ['name' => $filename, 'created_at' => time()]);
                }
            }
        }
    }
}
