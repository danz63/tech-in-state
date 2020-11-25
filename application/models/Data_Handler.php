<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Handler extends CI_Model
{
    public function getSubMenu()
    {
        $this->db->select('sub_menu.*, menu.menu');
        $this->db->from('sub_menu');
        $this->db->join('menu', 'sub_menu.menu_id=menu.id');
        return $this->db->get()->result_array();
    }

    public function insertMenu($data)
    {
        $data += [
            'is_active' => 1
        ];
        $this->db->insert('sub_menu', $data);
        return $this->db->affected_rows();
    }

    public function getLastImage()
    {
        return $this->db->select('*')->order_by('created_at', "desc")->limit(5)->get('image')->result_array();
    }

    public function getCategories()
    {
        return $this->db->get("category")->result_array();
    }
}
