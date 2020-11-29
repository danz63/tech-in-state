<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MY_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('category', 'Kategori', 'required|trim', [
            'required' => 'Kategori Artikel Harus Diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Kategori',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'sidebar' => $this->getSideBar(),
                'categories' => $this->db->get('category')->result_array()
            ];
            $this->load->view('backend/category/index', $data);
        } else {
            $this->db->insert('category', [
                'category' => $this->input->post('category')
            ]);
            $this->session->set_flashdata('flash', [
                'bg' => 'success',
                'title' => 'Sukses',
                'heading' => 'Sukses!',
                'text' => 'Kategori Baru Berhasil Ditambahkan'
            ]);
            redirect('/category');
        }
    }
    public function getById()
    {
        echo json_encode($this->db->get_where('category', ['id' => $this->input->post('id')])->row_array());
    }

    public function update()
    {
        $this->form_validation->set_rules('category', 'Kategori', 'required|trim', [
            'required' => 'Kategori Menu Harus Diisi!'
        ]);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('category', [
            'category' => $this->input->post('category')
        ]);
        $this->session->set_flashdata('flash', [
            'bg' => 'success',
            'title' => 'Sukses',
            'heading' => 'Sukses!',
            'text' => 'Kategori Berhasil Diubah'
        ]);
        redirect('/category');
    }
}
