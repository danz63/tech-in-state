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

function getUser()
{
    $inc = get_instance();
    return $inc->db->get_where('user', ['email' => $inc->session->userdata('email')])->row_array();
}
