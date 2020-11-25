<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    private $error;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->error = 'data-container="body" data-toggle="popover" data-color="danger" data-placement="right" data-content=';
    }
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => $this->error . '"Email Harus Diisi!"',
            'valid_email' => $this->error . '"Format Email Tidak Valid!"'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => $this->error . '"Kata Sandi Harus Diisi!"'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Login Pengguna'
            ];

            $this->load->view('backend/auth/login', $data);
        } else {

            $this->_login();
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect("/user");
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => $this->error . '"Nama Harus Diisi!"'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', [
            'required' => $this->error . '"Email Harus Diisi!"',
            'is_unique' => $this->error . '"Email Sudah pernah didaftarkan!"'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[r_password]', [
            'matches' => $this->error . '"Kata Sandi Tidak Sesuai!"',
            'min_length' => $this->error . '"Kata Sandi terlalu pendek!"'
        ]);
        $this->form_validation->set_rules('r_password', 'Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() === false) {
            $data = [
                'title' => 'Registrasi Pengguna'
            ];
            $this->load->view('backend/auth/registration', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'created_at' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('flash', [
                'bg' => 'primary',
                'title' => 'Sukses',
                'heading' => 'Silahkan Login!',
                'text' => 'Akun Terdaftar,Silahkan Login Untuk melanjutkan'
            ]);
            redirect('/auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('flash', [
                        'bg' => 'primary',
                        'title' => 'Sukses',
                        'heading' => 'Login Sukses!',
                        'text' => 'Selamat Datang ' . $user['name']
                    ]);
                    if ($user['role_id'] == '1') {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('flash', [
                        'bg' => 'danger',
                        'title' => 'Peringatan',
                        'heading' => 'Kata Sandi Salah!',
                        'text' => 'Kata Sandi Tidak valid!'
                    ]);
                    redirect('/auth');
                }
            } else {
                $this->session->set_flashdata('flash', [
                    'bg' => 'danger',
                    'title' => 'Peringatan',
                    'heading' => 'Email Belum diaktifasi!',
                    'text' => 'Silahkan aktifasi akun dengan membuka tautan yang dikirim melalui Email'
                ]);
                redirect('/auth');
            }
        } else {
            $this->session->set_flashdata('flash', [
                'bg' => 'danger',
                'title' => 'Peringatan',
                'heading' => 'Email Tidak valid!',
                'text' => 'Email Belum pernah didaftarkan!'
            ]);
            redirect('/auth');
        }
    }

    public function logout()
    {
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user', ['last_login' => time()]);
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('flash', [
            'bg' => 'info',
            'title' => 'Informasi',
            'heading' => 'Sudah berhasil keluar!',
            'text' => 'Silahkan kembali lagi nanti!'
        ]);
        redirect('/auth');
    }

    public function forbidden()
    {
        $data['title'] = '403 Forbidden';
        $this->load->view('backend/auth/forbidden', $data);
    }
}
