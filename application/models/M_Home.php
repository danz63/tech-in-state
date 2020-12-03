<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Home extends CI_Model
{

    public function getTopNav()
    {
        return  $this->db->get_where('classification', ['is_active' => '1'])->result_array();
    }

    public function getSubTopNav()
    {
        $this->db->select('category.id, classification_category.classification_id, category.category');
        $this->db->from('classification_category');
        $this->db->join('category', 'classification_category.category_id=category.id');
        $this->db->order_by('classification_category.category_id', 'ASC');
        return $this->db->get()->result_array();
    }
}
