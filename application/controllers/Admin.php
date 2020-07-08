<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('is_active', 0);
        $data['mahasiswa'] = $this->db->get('user')->result();
        $this->load->view('admin/index', $data);
    }

    public function aktivasi($id)
    {
        $this->db->where('id', $id);
        $this->db->update('user', ['is_active' => 1]);
        redirect('admin');
    }

    public function hapus($id)
    {
        $q = $this->db->get_where('user', ['id' => $id])->row_array();
        $nim = $q['no_induk'];
        $r = $this->db->get_where('pengajuan_judul', ['nim' => $nim])->row_array();
        $id_baru = $r['id'];

        $this->db->delete('user', array('id' => $id));
        $this->db->delete('pengajuan_judul', array('id' => $id_baru));
        redirect('admin');
    }

    public function kelulusan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/kelulusan', $data);
    }

    public function dosen()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('nama', 'ASC');
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('admin/dosen', $data);
    }

    public function tambah_dosen()
    {
        $this->form_validation->set_rules('no_induk', 'No_Induk', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('admin/dosen');
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
                'no_induk' => $this->input->post('no_induk'),
                'email' => $data['email'],
                'jabatan' => 'Dosen',
            ];

            $this->db->insert('user', $data);
            $this->db->insert('dosen', $d);
            $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5 col-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Dosen Berhasil Ditambahkan !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
            redirect('admin/dosen');
        }
    }

    public function set_koordinator()
    {
        $nama = $this->input->post('nama');
        $ambil_dosen = $this->db->get_where('dosen', ['nama' => $nama])->row_array();
        $data['dosen'] = $ambil_dosen['nama'];

        $this->db->where('nama !=', $nama);
        $this->db->update('dosen', ['jabatan' => 'Dosen']);
        $this->db->where('nama', $nama);
        $this->db->update('dosen', ['jabatan' => 'Koordinator']);

        $this->db->get('user');

        $this->db->where('role_id', 3);
        $this->db->update('user', ['role_id' => 2]);

        $this->db->where('nama', $nama);
        $this->db->update('user', ['role_id' => 3]);
        redirect('admin/dosen');
    }

    public function hapus_dosen($no_induk)
    {
        $this->db->delete('user', array('no_induk' => $no_induk));
        $this->db->delete('dosen', array('no_induk' => $no_induk));
        redirect('admin/dosen');
    }

    public function mahasiswa()
    {
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('admin/mahasiswa', $data);
    }
}
