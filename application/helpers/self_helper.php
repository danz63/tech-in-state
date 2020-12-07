<?php
function is_logged_in()
{
    $inc = get_instance();
    if (!$inc->session->userdata('email')) {
        $inc->session->set_flashdata('flash', [
            'bg' => 'danger',
            'title' => 'Peringatan',
            'heading' => 'Menyalahi Aturan!',
            'text' => 'Anda Harus Login Terlebih Dahulu!'
        ]);
        redirect('/auth');
    } else {
        $menu = $inc->uri->segment(1);
        $menu_id = $inc->db->get_where('menu', ['menu' => $menu])->row_array()['id'];
        // var_dump($menu_id);
        // die;
        $role_id = $inc->session->userdata('role_id');
        $status = $inc->db->get_where('access_menu', ['menu_id' => $menu_id, 'role_id' => $role_id]);
        if ($status->num_rows() < 1) {
            $inc->session->set_flashdata('flash', [
                'bg' => 'danger',
                'title' => 'Peringatan',
                'heading' => 'Menyalahi Aturan!',
                'text' => 'Anda Tidak mempunyai hak untuk mengakses halaman ini!'
            ]);
            redirect('/auth/forbidden');
        }
    }
}
function getTopNav()
{
    $inc = get_instance();
    return  $inc->db->get_where('classification', ['is_active' => '1'])->result_array();
}

function getSubTopNav()
{
    $inc = get_instance();
    $inc->db->select('category.id, classification_category.classification_id, category.category');
    $inc->db->from('classification_category');
    $inc->db->join('category', 'classification_category.category_id=category.id');
    $inc->db->order_by('classification_category.category_id', 'ASC');
    return $inc->db->get()->result_array();
}
function getUser()
{
    $inc = get_instance();
    return $inc->db->get_where('user', ['email' => $inc->session->userdata('email')])->row_array();
}

function getDifference($op2)
{
    $res = "";
    $origin = date_create(date("Y-m-d H:i:s", $op2));
    $target = date_create(date("Y-m-d H:i:s"));
    $interval = date_diff($origin, $target);
    if ($interval->format('%y') > 0)
        $res .= $interval->format('%y tahun ');
    if ($interval->format('%m') > 0)
        $res .= $interval->format('%y bulan ');
    if ($interval->format('%y') > 0)
        $res .= $interval->format('%d hari ');
    if ($interval->format('%h') > 0)
        $res .= $interval->format('%h jam ');
    if ($interval->format('%i') > 0)
        $res .= $interval->format('%i menit ');
    $res .= "yang lalu";
    return $res;
}

function getUserById($id)
{
    $inc = get_instance();
    return $inc->db->get_where('user', ['id' => $id])->row_array();
}

function fiterHTML4Tag($val)
{
    $val = str_replace("<tt>", "<pre><code>", $val);
    $val = str_replace("</tt>", "</code></pre>", $val);
    return $val;
}

function getLastestArticle()
{
    $inc = get_instance();
    $inc->db->order_by('id', 'DESC');
    $inc->db->limit(3);
    return $inc->db->get('article')->result_array();
}

function getCategoryOfArticle($id_article)
{
    $inc = get_instance();
    $inc->db->select('*');
    $inc->db->from('article_category');
    $inc->db->join('category', 'article_category.category_id=category.id');
    $inc->db->where('article_category.article_id', $id_article);
    $res = $inc->db->get()->result_array();
    return $res;
}

function getCommentOfArticle($id_article)
{
    $inc = get_instance();
    return $inc->db->get_where('comment', ['article_id' => $id_article]);
}
