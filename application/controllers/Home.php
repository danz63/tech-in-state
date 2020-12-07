<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  // public $topnav;
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Home');
  }
  public function index()
  {
    $data = [
      'title' => "TechInState",
      'article' => $this->M_Home->getArticle(),
      'series' => $this->db->get('series')->result_array()
    ];
    $this->load->view('frontend/home/index', $data);
  }

  public function read($id)
  {
    $data = [
      'article' => $this->M_Home->getArticleById($id)
    ];
    $this->load->view('frontend/home/content', $data);
  }

  public function list()
  {
    $data = [
      'title' => "TechInState",
      'series' => $this->db->get('series')->result_array()
    ];
    $this->load->view('frontend/home/list', $data);
  }

  public function category($id_category)
  {
    $category = $this->db->get_where('category', ['id' => $id_category])->row_array();
    $data = [
      'article' => $this->M_Home->getArticleByCategory($id_category),
      'title' => "Artikel Tentang " . $category['category'],
      'series' => $this->db->get('series')->result_array()
    ];
    $this->load->view('frontend/home/list', $data);
  }
  public function series($id_series)
  {
    $series = $this->db->get_where('series', ['id' => $id_series])->row_array();
    $data = [
      'article' => $this->M_Home->getArticleBySeries($id_series),
      'title' => "Artikel " . $series['seri'],
      'series' => $this->db->get('series')->result_array()
    ];

    $this->load->view('frontend/home/list', $data);
  }

  public function send_comment()
  {
    $data = [
      'comment' => $this->input->post('comment', true),
      'created_by' => $this->input->post('created_by', true),
      'article_id' => $this->input->post('article_id', true),
      'created_at' => time()
    ];
    $this->db->insert('comment', $data);
    $res = [
      'status' => $this->db->affected_rows()
    ];
    echo json_encode($res);
  }
}
