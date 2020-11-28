<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('self');
        is_logged_in();
    }

    public function getSideBar()
    {
        $sideBar = [];
        $role_id = $this->session->userdata('role_id');
        $query = "SELECT `a`.`id`, `a`.`menu` 
          FROM `menu` a JOIN `access_menu` b
          ON `a`.`id` = `b`.`menu_id`
          WHERE `b`.`role_id` = $role_id
          ORDER BY `b`.`menu_id` ASC";
        $menus = $this->db->query($query)->result_array();
        $submenus = $this->db->get_where('sub_menu', ['is_active' => 1])->result_array();
        foreach ($menus as $menu) :
            $tmp = [];
            foreach ($submenus as $submenu) {
                if ($menu['id'] == $submenu['menu_id'])
                    $tmp[] = $submenu;
            }
            $sideBar[] = [
                'title' => $menu['menu'],
                'submenu' => $tmp
            ];
        endforeach;
        empty($menus);
        empty($submenus);
        return $sideBar;
    }

    public function randString()
    {
        $length = 5;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    public function upload_image($ret = false)
    {
        for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
            if ($_FILES['image']['error'][$i] == 0) {
                $split = explode('.', $_FILES['image']['name'][$i]);
                $name = $this->randString() . "_" . time() . "_" . $i . "." . $split[count($split) - 1];
                $_FILES['file']['name']     = $name;
                $_FILES['file']['type']     = $_FILES['image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['image']['error'][$i];
                $_FILES['file']['size']     = $_FILES['image']['size'][$i];
                // var_dump($_FILES['file']);
                // die;
                $config['upload_path']      = './assets/img/picture/';
                $config['allowed_types']    = 'jpg|jpeg|png|gif';
                $config['max_size']         = str_replace("M", "000", ini_get('upload_max_filesize'));
                $config['file_name']        = $name;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    if ($ret == false) {
                        $this->db->insert('image', ['name' => $filename, 'created_at' => time()]);
                    } else {
                        return $filename;
                    }
                } else {
                    var_dump($this->upload->display_errors());
                    die;
                }
            }
        }
    }
}
