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
            'user' => getUser(),
            'sidebar' => $this->getSideBar(),
            'menu' => $this->db->get('menu')->result_array(),
            'article' => $this->db->get('article')->result_array()
        ];
        $this->load->view('backend/article/index', $data);
    }

    public function insert_image()
    {
        $data = [
            'title' => 'Upload Gambar',
            'user' => getUser(),
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
            'title' => 'Tulis Artikel',
            'user' => getUser(),
            'sidebar' => $this->getSideBar(),
            'images' => $this->dataHandler->getLastImage(),
            'categories' => $this->dataHandler->getCategories(),
            'series' => $this->db->get('series')->result_array()
        ];
        $this->load->view('backend/article/create_article', $data);
    }

    public function store_article()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required|trim');
        $this->form_validation->set_rules('content', 'Konten', 'required');
        if ($this->form_validation->run() == true) {
            if ($_FILES['image']['error'] == 4) {
                $thumbnail = $this->db->get_where('series', ['id' => $this->input->post('series')]);
                $thumbnail = $thumbnail['thumbnail'];
            } else {
                $thumbnail = $this->upload_image(true);
            }
            $user = getUser();
            $data = [
                'title' => $this->input->post('title', true),
                'content' => $this->input->post('content', true),
                'thumbnail' => $thumbnail,
                'created_at' => time(),
                'created_by' => $user['id']
            ];
            $this->load->model('Data_Handler', 'dataHandler');
            $this->db->insert('article', $data);
            $statQuery1 = $this->db->affected_rows();
            $last_id = $this->db->insert_id();
            $statQuery2 = $this->dataHandler->setCategory($last_id, $this->input->post('categories'));
            if ($statQuery1 > 0 && $statQuery2 > 0) {
                $this->session->set_flashdata('flash', [
                    'bg' => 'success',
                    'title' => 'Sukses',
                    'heading' => 'Sukses!',
                    'text' => 'Artikel Berhasil Ditambahkan'
                ]);
                redirect('article/index');
            } else {
                echo "Gagal<br> Query1 : $statQuery1 <br>Query2 : $statQuery2";
            }
        }
    }


    public function show_all_image()
    {
        $this->load->model('Data_Handler', 'dataHandler');
        $data = [
            'title' => 'Tulis Artikel',
            'user' => getUser(),
            'sidebar' => $this->getSideBar(),
            'images' => $this->dataHandler->getAllImage()
        ];
        $this->load->view('backend/article/show_all_images', $data);
    }


    public function upload_image($ret = false)
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
                $config['allowed_types']    = 'jpg|jpeg|png|gif|svg';
                $config['max_size']         = str_replace("M", "000", ini_get('upload_max_filesize'));
                $config['file_name']        = $name;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    if (!$ret)
                        $this->db->insert('image', ['name' => $filename, 'created_at' => time()]);
                    else
                        return $filename;
                }
            }
        }
    }
}
