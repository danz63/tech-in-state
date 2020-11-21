<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_Model extends CI_Model
{
    public function getSubMenu()
    {
        $this->db->select('sub_menu.*, menu.menu');
        $this->db->from('sub_menu');
        $this->db->join('menu', 'sub_menu.menu_id=menu.id');
        return $this->db->get()->result_array();
    }
}
