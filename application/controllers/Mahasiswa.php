<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/footer', $data);
    }

    public function step1()
    {
        $nama = $this->session->userdata('nama');
        $nim = $this->session->userdata('no_induk');

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('pildos1', 'Pildos1', 'required|trim');
        $this->form_validation->set_rules('pildos2', 'Pildos2', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('allert', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
            <div class="alert-icon"><i class="flaticon-check"></i></div>
            <div class="alert-text">Tolong lengkapi kolom isian !</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>');
            redirect('mahasiswa');
        } else {
            $data = [
                'nama' => $nama,
                'nim' => $nim,
                'judul' => $this->input->post('judul'),
                'pildos1' => $this->input->post('pildos1'),
                'pildos2' => $this->input->post('pildos2'),
                'step' => 1
            ];

            $d = [
                'nama' => $nama,
                'nim' => $nim,
                'progres' => $this->input->post('judul')
            ];

            $config['allowed_types']        = 'pdf';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/pdf/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $d['berkas'] = $this->upload->data('file_name');

                $this->db->insert('pengajuan_judul', $data);
                $this->db->insert('bimbingan_proposal', $d);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Data berhasil disubmit !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('mahasiswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">File berkas harus PDF !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('mahasiswa');
            }
        }
    }

    public function step2()
    {
        $nama = $this->session->userdata('nama');
        $nim = $this->session->userdata('no_induk');

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('allert', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
            <div class="alert-icon"><i class="flaticon-check"></i></div>
            <div class="alert-text">Tolong lengkapi kolom isian !</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>');
            redirect('mahasiswa');
        } else {
            $data = [
                'nama' => $nama,
                'nim' => $nim,
                'progres' => $this->input->post('judul'),
            ];

            $config['allowed_types']        = 'pdf';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/img/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('bimbingan_proposal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Laporan bimbingan telah terkirim ke dosen !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('mahasiswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">File berkas harus berformat PDF !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');
                redirect('mahasiswa');
            }
        }
    }

    public function riwayat()
    {
        $this->db->group_by("nama");
        $data['mahasiswa'] = $this->db->get('bimbingan_proposal')->result();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/riwayat', $data);
        $this->load->view('mahasiswa/footer', $data);
    }

    public function proposal()
    {
        $this->load->view('mahasiswa/proposal');
    }

    public function absensi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/absensi', $data);
        $this->load->view('mahasiswa/footer', $data);
    }

    public function tambah_absensi()
    {
        $nama = $this->session->userdata('nama');
        $nim = $this->session->userdata('no_induk');

        $this->form_validation->set_rules('judul_berita', 'Judul_berita', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('allert', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
            <div class="alert-icon"><i class="flaticon-check"></i></div>
            <div class="alert-text">Tolong lengkapi kolom isian !</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>');
            redirect('mahasiswa/absensi');
        } else {
            $data = [
                'nama' => $nama,
                'nim' => $nim,
                'judul_berita' => $this->input->post('judul_berita')
            ];

            $d = [
                'nama' => $nama,
                'nim' => $nim,
                'judul_berita' => $this->input->post('judul_berita')
            ];

            $config['allowed_types']        = 'pdf';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/pdf/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $d['berkas'] = $this->upload->data('file_name');

                $this->db->insert('absensi', $data);
                $this->db->insert('cek_absensi', $d);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Data berhasil disubmit !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('mahasiswa/absensi');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">File berkas harus PDF !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('mahasiswa/absensi');
            }
        }
    }

    public function cek_absensi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['cek_absensi'] = $this->db->get_where('cek_absensi');
        $data['mahasiswa'] = $this->db->get('cek_absensi')->result();
        $this->load->view('mahasiswa/cek_absensi', $data);

    }
}
