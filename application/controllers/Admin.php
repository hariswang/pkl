<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
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
        $this->load->view('admin/kelulusan');
    }
}
