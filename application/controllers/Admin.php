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
        $this->db->where('id', $id);
        $this->db->delete('user');
        redirect('admin');
    }

    public function kelulusan()
    {
        $this->load->view('admin/kelulusan');
    }
}
