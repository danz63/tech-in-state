<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('frontend/home/index');
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
