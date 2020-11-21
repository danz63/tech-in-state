<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('flash', [
                'bg' => 'danger',
                'title' => 'Peringatan',
                'heading' => 'Menyalahi Aturan!',
                'text' => 'Anda Harus Login Terlebig Dahulu!'
            ]);
            redirect('/');
        }
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
}
