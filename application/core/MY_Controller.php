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
}
