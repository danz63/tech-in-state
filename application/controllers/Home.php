<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('front_end/home/index');
  }
  public function content()
  {
    $this->load->view('front_end/home/content');
  }
  public function list()
  {
    $this->load->view('front_end/home/list');
  }
}
