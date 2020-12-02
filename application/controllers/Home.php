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
      'topnav' => $this->M_Home->getTopNav(),
      'title' => "TechInState"
    ];
    $this->load->view('frontend/home/index', $data);
  }
  public function content()
  {
    $this->load->view('frontend/home/content');
  }
  public function list()
  {
    $this->load->view('frontend/home/list');
  }
}
