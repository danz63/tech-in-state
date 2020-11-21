<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', [
            'required' => 'Nama Menu Harus Diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Manajemen Menu',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'sidebar' => $this->getSideBar(),
                'menu' => $this->db->get('menu')->result_array()
            ];
            $this->load->view('backend/menu/index', $data);
        } else {
            $this->db->insert('menu', [
                'menu' => $this->input->post('menu')
            ]);
            $this->session->set_flashdata('flash', [
                'bg' => 'success',
                'title' => 'Sukses',
                'heading' => 'Sukses!',
                'text' => 'Menu Baru Berhasil Ditambahkan'
            ]);
            redirect('/menu');
        }
    }

    public function update()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', [
            'required' => 'Nama Menu Harus Diisi!'
        ]);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', [
            'menu' => $this->input->post('menu')
        ]);
        $this->session->set_flashdata('flash', [
            'bg' => 'success',
            'title' => 'Sukses',
            'heading' => 'Sukses!',
            'text' => 'Menu Berhasil Diperbaharui'
        ]);
        redirect('/menu');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu');
        $this->session->set_flashdata('flash', [
            'bg' => 'success',
            'title' => 'Sukses',
            'heading' => 'Sukses!',
            'text' => 'Menu Berhasil Dihapus'
        ]);
        redirect('/menu');
    }

    public function getById()
    {
        echo json_encode($this->db->get_where('menu', ['id' => $this->input->post('id')])->row_array());
    }

    public function submenu()
    {
        $this->load->model('Menu_Model', 'menu');
        $data = [
            'title' => 'Manajemen Submenu',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'sidebar' => $this->getSideBar(),
            'submenu' => $this->menu->getSubMenu(),
            'menu' => $this->db->get('menu')->result_array()
        ];
        $this->load->view('backend/menu/submenu', $data);
    }
}
