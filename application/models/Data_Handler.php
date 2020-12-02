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

    public function setClassification($id_classification, $category)
    {
        $query = "INSERT INTO classification_category (classification_id, category_id) VALUES ";
        foreach ($category as $c) {
            $query .= "(" . $id_classification . "," . $c . "),";
        }
        $query = rtrim($query, ",");
        $this->db->query($query);
        return $this->db->affected_rows();
    }

    public function concatCategories()
    {
        $query = "SELECT a.id, a.classification_id, c.category FROM classification_category a JOIN category c ON a.category_id=c.id";
        return $this->db->query($query)->result_array();
    }

    public function getClassById($id)
    {
        $data = $this->db->get_where('classification', ['id' => $id])->row_array();
        $this->db->where('classification_id', $id);
        $this->db->select('category_id');
        $data_categories = $this->db->get('classification_category')->result_array();
        $id_categories = [];
        foreach ($data_categories as $c) {
            $id_categories[] = $c['category_id'];
        }
        unset($data_categories);
        $res = [
            'id' => $data['id'],
            'name' => $data['name'],
            'is_active' => $data['is_active'],
            'id_categories' => $id_categories
        ];
        return $res;
    }

    public function updateClass($data)
    {
        $this->db->where('classification_id', $data['id']);
        $this->db->delete('classification_category');
        $query = $this->setClassification($data['id'], $data['categories']);
        $d = [
            'name' => $data['name'],
            'is_active' => $data['is_active']
        ];
        $this->db->where('id', $data['id']);
        $this->db->update('classification', $d);
        $query1 = $this->db->affected_rows();
        if ($query > 0 && $query1 > 0) {
            return true;
        }
        return false;
    }
}
