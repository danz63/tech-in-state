<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Series extends MY_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('seri', 'Seri', 'required|trim', [
            'required' => 'Series Artikel Harus Diisi!'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Series',
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'sidebar' => $this->getSideBar(),
                'series' => $this->db->get('series')->result_array()
            ];
            $this->load->view('backend/series/index', $data);
        } else {
            $thumbnail = $this->upload_image(true);
            $this->db->insert('series', ['seri' => $this->input->post('seri'), 'thumbnail' => $thumbnail]);
            $this->session->set_flashdata('flash', [
                'bg' => 'success',
                'title' => 'Sukses',
                'heading' => 'Sukses!',
                'text' => 'Seri Berhasil Ditambahkan'
            ]);
            redirect('series');
        }
    }

    public function getById()
    {
        echo json_encode($this->db->get_where('series', ['id' => $this->input->post('id')])->row_array());
    }

    public function update()
    {
        $this->form_validation->set_rules('seri', 'Seri', 'required|trim', [
            'required' => 'Seri Menu Harus Diisi!'
        ]);
        if ($_FILES['image']['error'][0] == 0) {
            $seri = $this->db->get_where('series', ['id' => $this->input->post('id')])->row_array();
            $path = FCPATH . "/assets/backend/img/picture/" . $seri['thumbnail'];
            unlink($path);
            $thumbnail = $this->upload_image(true);
            $this->db->set('thumbnail', $thumbnail);
        }
        $this->db->set('seri', $this->input->post('seri'));
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('series');
        $this->session->set_flashdata('flash', [
            'bg' => 'success',
            'title' => 'Sukses',
            'heading' => 'Sukses!',
            'text' => 'Seri Berhasil Diubah'
        ]);
        redirect('series');
    }
}
