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
        $data['mahasiswa'] = $this->db->get_where('pengajuan_judul', ['nim' => $this->session->userdata('no_induk')])->result();
        $nim = $data['user']['no_induk'];
        $ambil_step = $this->db->get_where('pengajuan_judul', ['nim' => $nim])->row_array();
        $data['step'] = $ambil_step['step'];
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
            $this->db->where('nama', $nama);
            $data = [
                'judul' => $this->input->post('judul'),
                'pildos1' => $this->input->post('pildos1'),
                'pildos2' => $this->input->post('pildos2')
            ];

            $d = [
                'nama' => $nama,
                'nim' => $nim,
                'progres' => $this->input->post('judul')
            ];

            $config['allowed_types']        = 'pdf|doc|docx';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/pdf/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $d['berkas'] = $this->upload->data('file_name');

                $this->db->update('pengajuan_judul', $data);
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
                    <div class="alert-text">File berkas belum ada, format harus .doc/.docx/.pdf !</div>
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

            $config['allowed_types']        = 'pdf|doc|docx';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/img/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('bimbingan_proposal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Laporan Bimbingan Proposal telah terkirim ke dosen !</div>
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
                <div class="alert-text">File berkas harus berformat PDF|.doc|.docx !</div>
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

    public function step4($no_induk)
    {
        $this->db->where('nim', $no_induk);
        $this->db->update('pengajuan_judul', ['step' => 5]);
        redirect('mahasiswa');
    }

    public function step5()
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

            $config['allowed_types']        = 'pdf|doc|docx';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/img/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('bimbingan_ta', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-check"></i></div>
                        <div class="alert-text">Laporan Bimbingan Tugas Akhir telah terkirim ke dosen !</div>
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
                    <div class="alert-text">File berkas harus berformat PDF|.doc|.docx !</div>
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
        $nama = $this->session->userdata('nama');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->db->get_where('bimbingan_proposal', ['nama' => $nama])->result();
        $this->load->view('mahasiswa/header', $data);
        $this->load->view('mahasiswa/riwayat', $data);
        $this->load->view('mahasiswa/footer', $data);
    }

    public function proposal()
    {
        $this->load->view('mahasiswa/proposal');
    }
}
