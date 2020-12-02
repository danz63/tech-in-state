<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classification extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Handler', 'dataHandler');
    }

    public function index()
    {
        $data = [
            'title' => 'Klasifikasi',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'classifications' => $this->db->get('classification')->result_array(),
            'rel' => $this->dataHandler->concatCategories()
        ];
        $this->load->view('backend/classification/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Klasifikasi',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'categories' => $this->db->get('category')->result_array()
        ];
        $this->load->view('backend/classification/create', $data);
    }

    public function store()
    {
        $this->form_validation->set_rules('name', 'Classification', 'required|trim', [
            'required' => 'Nama Klasifikasi Harus Diisi!'
        ]);
        if ($this->form_validation->run() == true) {
            $data = [
                'is_active' => 1,
                'name' => $this->input->post('name', true)
            ];
            $this->db->insert('classification', $data);
            $statQuery1 = $this->db->affected_rows();
            $last_id = $this->db->insert_id();
            $statQuery2 = $this->dataHandler->setClassification($last_id, $this->input->post('categories', true));
            if ($statQuery1 > 0 && $statQuery2 > 0) {
                $this->session->set_flashdata('flash', [
                    'bg' => 'success',
                    'title' => 'Sukses',
                    'heading' => 'Sukses!',
                    'text' => 'Klasifikasi Berhasil Ditambahkan'
                ]);
                redirect('classification/index');
            } else {
                echo "Gagal<br> Query1 : $statQuery1 <br>Query2 : $statQuery2";
            }
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Klasifikasi',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'categories' => $this->db->get('category')->result_array(),
            'class' => $this->dataHandler->getClassById($id)
        ];
        $this->load->view('backend/classification/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('name', 'Classification', 'required|trim', [
            'required' => 'Nama Klasifikasi Harus Diisi!'
        ]);
        if ($this->form_validation->run() == true) {
            $data = [
                'id' => $this->input->post('id', true),
                'name' => $this->input->post('name', true),
                'is_active' => $this->input->post('is_active', true),
                'categories' => $this->input->post('categories', true)
            ];
            $res = $this->dataHandler->updateClass($data);
            if ($res) {
                $this->session->set_flashdata('flash', [
                    'bg' => 'success',
                    'title' => 'Sukses',
                    'heading' => 'Sukses!',
                    'text' => 'Klasifikasi Berhasil Diperbaharui'
                ]);
                redirect('classification/index');
            }
        }
    }
}
