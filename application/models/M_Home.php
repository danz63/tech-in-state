<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Home extends CI_Model
{
    public function getArticle()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('article')->result_array();
    }

    public function getArticleById($id)
    {
        $this->db->select('article_category.category_id, category.category');
        $this->db->from('article_category');
        $this->db->join('category', 'article_category.category_id=category.id');
        $this->db->where('article_category.article_id', $id);

        $categoryArticle = $this->db->get()->result_array();
        $this->db->where('id', $id);
        $article = $this->db->get('article')->row_array();
        $res = [
            'title' => $article['title'],
            'content' => $article['content'],
            'category' => $categoryArticle,
            'created_by' => $article['created_by'],
            'created_at' => $article['created_at'],
            'thumbnail' => $article['thumbnail']
        ];
        return $res;
    }

    public function getArticleByCategory($id_category)
    {
        $this->db->select('*');
        $this->db->from('article_category');
        $this->db->join('article', 'article_category.article_id=article.id');
        $this->db->where('article_category.category_id', $id_category);
        $res = $this->db->get()->result_array();
        return $res;
    }
    public function getArticleBySeries($id_series)
    {
        return $this->db->get_where('article', 'series_id=' . $id_series)->result_array();
    }
}
