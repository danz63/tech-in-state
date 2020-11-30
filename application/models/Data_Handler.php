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

    public function getAllImage()
    {
        return $this->db->get('image')->result_array();
    }

    public function getCategories()
    {
        return $this->db->get("category")->result_array();
    }

    public function setCategory($id, $category)
    {
        $query = "INSERT INTO article_category (article_id, category_id) VALUES ";
        foreach ($category as $c) {
            $query .= "(" . $id . "," . $c . "),";
        }
        $query = rtrim($query, ",");
        $this->db->query($query);
        return $this->db->affected_rows();
    }

    public function getArticleById($id)
    {
        $data = $this->db->get_where('article', ['id' => $id])->row_array();
        $this->db->where('article_id', $id);
        $this->db->select('category_id');
        $id_categories = [];
        $data_categories = $this->db->get('article_category')->result_array();
        foreach ($data_categories as $c) {
            $id_categories[] = $c['category_id'];
        }
        unset($data_categories);
        // echo "<pre>";
        // var_dump($id_categories);
        // echo "</pre>";
        // $id_categories = array_column($id_categories, 'article_id');
        // die;
        $res = [
            'id' => $data['id'],
            'title' => $data['title'],
            'content' => $data['content'],
            'thumbnail' => $data['thumbnail'],
            'series_id' => $data['series_id'],
            'created_at' => $data['created_at'],
            'created_by' => $data['created_by'],
            'id_categories' => $id_categories
        ];
        return $res;
    }
}
