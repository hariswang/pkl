<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koordinator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        cek_login();
    }

    public function index()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('step', 1);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('koordinator/header', $data);
        $this->load->view('koordinator/index', $data);
        $this->load->view('koordinator/footer', $data);
    }

    public function cek_mhs()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('koordinator/cek_mhs', $data);
        $this->load->view('koordinator/footer', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengajuan_judul');
        $this->db->delete('bimbingan_proposal');
        redirect('koordinator');
    }

    public function index_dosen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('nama', 'ASC');
        $result['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('koordinator/header', $data);
        $this->load->view('koordinator/index_dosen', $result);
        $this->load->view('koordinator/footer', $data);
    }

    public function tambah_dosen()
    {
        $this->form_validation->set_rules('no_induk', 'No_Induk', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('koordinator');
        } else {


            $data = [
                'nama' => $this->input->post('nama'),
                'no_induk' => $this->input->post('no_induk'),
                'email' => $this->input->post('email'),
                'image' => 'default.png',
                'password' => password_hash($this->input->post('no_induk'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $d = [
                'nama' => $data['nama'],
                'email' => $data['email'],
            ];

            $this->db->insert('user', $data);
            $this->db->insert('dosen', $d);
            $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Anda telah melakukan registrasi, Admin akan melakukan aktivasi akun anda segera !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
            redirect('koordinator/index_dosen');
        }
    }

    public function terima($id)
    {

        $this->db->where('id', $id);
        $this->db->update('pengajuan_judul', ['step' => 2]);
        redirect('koordinator');
    }

    public function ujian_proposal()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->db->where('acc_dosen1', 1);
        $this->db->where('acc_dosen2', 1);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('koordinator/header', $data);
        $this->load->view('koordinator/ujian_proposal', $data);
        $this->load->view('koordinator/footer', $data);
    }

    public function ujian_ta()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->db->where('acc_dosen1 >=', 3);
        $this->db->where('acc_dosen2 >=', 3);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('koordinator/header', $data);
        $this->load->view('koordinator/ujian_ta', $data);
        $this->load->view('koordinator/footer', $data);
    }

    public function set_ujian_proposal()
    {

        $id = $this->input->post('id');

        $data = [
            'step' => 3,
            'penguji_1' => $this->input->post('penguji1'),
            'penguji_2' => $this->input->post('penguji2'),
            'jadwal_ujian_proposal' => $this->input->post('kt_datepicker_3'),
        ];
        $this->db->where('id', $id);
        $this->db->update('pengajuan_judul', $data);
        redirect('koordinator/ujian_proposal');
    }

    public function set_ujian_ta()
    {

        $id = $this->input->post('id');

        $data = [
            'step' => 6,
            'jadwal_seminar' => $this->input->post('seminar'),
            'jadwal_ujian_ta' => $this->input->post('kt_datepicker_3'),
        ];
        $this->db->where('id', $id);
        $this->db->update('pengajuan_judul', $data);
        redirect('koordinator/ujian_ta');
    }
}
