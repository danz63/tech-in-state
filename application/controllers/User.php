<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

      public function index()
      {
            $data = [
                  'title' => 'Profil',
                  'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                  'sidebar' => $this->getSideBar()
            ];
            $this->load->view('user/index', $data);
      }

      public function update()
      {
            $this->form_validation->set_rules('image', '');
      }

      public function doUpload()
      {
            $config['upload_path']          = './assets/img/profile/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
      }
}
