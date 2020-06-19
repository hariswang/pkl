<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Monitoring Tugas Akhir | Login Page';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'no_induk' => $user['no_induk'],
                        'nama' => $user['nama']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 2) {
                        redirect('dosen');
                    } else if ($user['role_id'] == 3) {
                        redirect('koordinator');
                    } else {
                        redirect('mahasiswa');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-check"></i></div>
                        <div class="alert-text">Password salah !</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">Akun belum diaktivasi oleh admin !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">Email Belum Terdafatar !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_induk', 'No_Induk', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Monitoring Tugas Akhir';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'no_induk' => htmlspecialchars($this->input->post('no_induk', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 4,
                'is_active' => 0,
                'date_created' => time()
            ];
            $d = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nim' => htmlspecialchars($this->input->post('no_induk', true)),
                'step' => 1
            ];

            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/img/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('user', $data);
                $this->db->insert('pengajuan_judul', $d);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Anda telah melakukan registrasi, Admin akan melakukan aktivasi akun anda segera !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('auth');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Upload hanya file gambar berformat gif, jpg atau png !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('auth/registration');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">Anda telah melakukan logged out !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');
        redirect('auth');
    }
}
