<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $this->db->where('step', 2);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('dosen/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('dosen/footer');
    }

    public function cek_mhs($nim)
    {
        $data['bimbingan_proposal'] = $this->db->get_where('bimbingan_proposal', ['nim' => $this->session->userdata('nim')])->row_array();
        $this->db->where('nim', $nim);
        $data['mahasiswa'] = $this->db->get('bimbingan_proposal')->result();
        $this->load->view('dosen/header');
        $this->load->view('dosen/laporan_prg', $data);
        $this->load->view('dosen/footer');
    }

    public function tanggapan()
    {
        $nim = $this->input->post('nim');
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'progres' => $this->input->post('progres'),
            'catatan' => $this->input->post('editor1')
        ];

        $this->db->insert('bimbingan_proposal', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">Data berhasil disubmit !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');

        redirect('dosen/cek_mhs/' . $nim);
    }

    public function ba_bimbingan()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $this->db->where('step', 2);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('dosen/header');
        $this->load->view('dosen/ba_bimbingan', $data);
        $this->load->view('dosen/footer');
    }

    public function tambah_absensi()
    {
        $data['nim'] = $this->input->post('nim');
        $n = $this->db->get_where('user', ['no_induk' => $data['nim']])->row_array();
        $data['nama'] = $n['nama'];
        $this->db->insert('ba_bimbingan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                <div class="alert-icon"><i class="flaticon-check"></i></div>
                <div class="alert-text">Data berhasil disubmit !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>');
        redirect('dosen/ba_bimbingan');
    }

    public function jml_ba_bimbingan($nama)
    {
        $data['ba_bimbingan'] = $this->db->get_where('bimbingan_proposal', ['nama' => $this->session->userdata('nama')])->row_array();
        $this->db->where('nama', $nama);
        $data['mahasiswa'] = $this->db->get('ba_bimbingan')->result();
        $this->load->view('dosen/header');
        $this->load->view('dosen/cek_ba_bimbingan_mhs', $data);
        $this->load->view('dosen/footer');
    }

    public function berita_acara()
    {
        $this->load->view('dosen/berita_acara');
    }
}
