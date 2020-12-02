<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Home extends CI_Model
{

    public function getTopNav()
    {
        return $this->db->get_where('classification', ['is_active' => '1'])->result_array();
    }
}
