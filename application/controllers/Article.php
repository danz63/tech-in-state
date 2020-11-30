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

    public function create_article()
    {
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
        $this->form_validation->set_rules('series', 'Series', 'required');
        if ($this->form_validation->run() == true) {

            if ($_FILES['image']['error'][0] == 4) {
                $thumbnail = $this->db->get_where('series', ['id' => $this->input->post('series')])->row_array();
                $thumbnail = $thumbnail['thumbnail'];
            } else {
                $thumbnail = $this->upload_image(true);
            }
            $user = getUser();
            $data = [
                'title' => $this->input->post('title', true),
                'content' => $this->input->post('content', true),
                'thumbnail' => $thumbnail,
                'series_id' => $this->input->post('series'),
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

    public function edit_article($id)
    {
        $this->load->model('Data_Handler', 'dataHandler');
        $data = [
            'title' => 'Tulis Artikel',
            'user' => getUser(),
            'sidebar' => $this->getSideBar(),
            'images' => $this->dataHandler->getLastImage(),
            'categories' => $this->dataHandler->getCategories(),
            'series' => $this->db->get('series')->result_array(),
            'category' => $this->dataHandler->getArticleById($id)
        ];
        $this->load->view('backend/article/edit_article', $data);
    }

    public function update_article()
    {
        $this->form_validation->set_rules('title', 'Judul', 'required|trim');
        $this->form_validation->set_rules('content', 'Konten', 'required');
        $this->form_validation->set_rules('series', 'Series', 'required');
        if ($this->form_validation->run() == true) {
            if ($_FILES['image']['error'][0] == 0) {
                $thumbnail = $this->upload_image(true);
            } else {
                $thumbnail = $this->db->get_where('article', ['id' => $this->input->post('id', true)])->row_array();
                $thumbnail = $thumbnail['thumbnail'];
            }
            $user = getUser();
            $data = [
                'title' => $this->input->post('title', true),
                'content' => $this->input->post('content', true),
                'thumbnail' => $thumbnail,
                'series_id' => $this->input->post('series', true),
                'created_at' => time(),
                'created_by' => $user['id']
            ];
            $this->db->delete('article_category', ['article_id' => $this->input->post('id', true)]);
            $this->db->where('id', $this->input->post('id', true));
            $this->db->set($data);
            $this->db->update('article');
            $this->session->set_flashdata('flash', [
                'bg' => 'success',
                'title' => 'Sukses',
                'heading' => 'Sukses!',
                'text' => 'Artikel Berhasil Diupdate'
            ]);
            redirect('article');
        }
    }

    //delete article
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('article');
        $this->db->where('article_id', $id);
        $this->db->delete('article_category');
        $this->session->set_flashdata('flash', [
            'bg' => 'success',
            'title' => 'Sukses',
            'heading' => 'Sukses!',
            'text' => 'Artikel Berhasil Dihapus'
        ]);
        redirect('/article');
    }


    // All About Images In Article
    public function insert_image()
    {
        $data = [
            'title' => 'Upload Gambar',
            'user' => getUser(),
            'sidebar' => $this->getSideBar()
        ];
        $this->load->view('backend/article/insert_image', $data);
    }

    public function store_image()
    {
        if (isset($_FILES['image'])) {
            if ($_FILES['image']['error'][0] == 0) {
                $this->upload_image();
            }
        }
        redirect('article/create_article');
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
}
