<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
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
        $nama = $this->session->userdata('nama');
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        // $this->db->where('step', 2);
        // $this->db->where("(pildos1='.$nama.' OR pildos2='.$nama.')", NULL, FALSE);
        $this->db->where('pildos1 =', $nama);
        $this->db->or_where('pildos2 =', $nama);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('dosen/footer', $data);
    }

    public function cek_mhs($nim)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bimbingan_proposal'] = $this->db->get_where('bimbingan_proposal', ['nim' => $this->session->userdata('nim')])->row_array();
        $this->db->where('nim', $nim);
        $data['mahasiswa'] = $this->db->get('bimbingan_proposal')->result();
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/laporan_prg', $data);
        $this->load->view('dosen/footer', $data);
    }

    public function tanggapan()
    {
        $nim = $this->input->post('nim');
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'progres' => $this->input->post('progres'),
            'berkas' => $this->input->post('berkas'),
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $this->db->where('step', 2);
        $data['mahasiswa'] = $this->db->get('pengajuan_judul')->result();
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/ba_bimbingan', $data);
        $this->load->view('dosen/footer', $data);
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $nama = $this->session->userdata('nama');
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        $this->load->view('dosen/header');
        $this->load->view('dosen/cek_ba_bimbingan_mhs', $data);
        $this->load->view('dosen/footer');
    }

    public function acc_prop($nim)
    {
        $nama = $this->session->userdata('nama');
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['pildos1' => $this->session->userdata('pildos1')])->row_array();
        $ambil_dosen = $this->db->get_where('pengajuan_judul', ['nim' => $nim])->row_array();
        $data['pildos1'] = $ambil_dosen['pildos1'];
        if ($nama == $data['pildos1']) {
            $this->db->where('nim', $nim);
            $this->db->update('pengajuan_judul', ['acc_dosen1' => 1]);
        } else {
            $this->db->update('pengajuan_judul', ['acc_dosen2' => 1]);
        }

        redirect('dosen');
    }

    public function ba_proposal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->db->where('pildos1 =', $nama);
        // $this->db->or_where('pildos2 =', $nama);
        $data['ujian'] = $this->db->get('pengajuan_judul')->result();
        $data['mahasiswa'] = $this->db->get('ba_proposal')->result();
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/ba_proposal', $data);
        $this->load->view('dosen/footer', $data);
    }

    public function absensi_ba_proposal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajuan_judul'] = $this->db->get_where('pengajuan_judul', ['step' => $this->session->userdata('step')])->row_array();
        // $this->db->where('pildos1 =', $nama);
        // $this->db->or_where('pildos2 =', $nama);
        $data['ujian'] = $this->db->get('pengajuan_judul')->result();
        $data['mahasiswa'] = $this->db->get('ba_proposal')->result();
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->db->where('step', 3);
        $this->load->view('dosen/header_absensi', $data);
        $this->load->view('dosen/absensi_ba_proposal', $data);
        $this->load->view('dosen/footer', $data);
    }

    public function tambah_absensi_ba_proposal()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

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
            redirect('dosen/ba_proposal');
        } else {
            $data = [
                'nama' => $this->input->post('nama')
            ];

            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/pdf/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('ba_proposal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Data berhasil disubmit !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('dosen/ba_proposal');
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
                redirect('dosen/ba_proposal');
            }
        }
    }

    public function penerimaan_proposal()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ujian'] = $this->db->get('pengajuan_judul')->result();
        $data['mahasiswa'] = $this->db->get('penerimaan_proposal')->result();
        $this->load->view('dosen/header', $data);
        $this->load->view('dosen/penerimaan_proposal', $data);
        $this->load->view('dosen/footer', $data);
    }

    public function terima_proposal()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

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
            redirect('dosen/penerimaan_proposal');
        } else {
            $data = [
                'nama' => $this->input->post('nama')
            ];

            $config['allowed_types']        = 'pdf';
            $config['encrypt_name']         = TRUE;
            $config['upload_path']          = './assets/pdf/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('berkas')) {
                $data['berkas'] = $this->upload->data('file_name');
                $this->db->insert('penerimaan_proposal', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-custom alert-light-success fade show mb-5" role="alert">
                    <div class="alert-icon"><i class="flaticon-check"></i></div>
                    <div class="alert-text">Data berhasil disubmit !</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close"></i></span>
                        </button>
                    </div>
                </div>');
                redirect('dosen/penerimaan_proposal');
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
                redirect('dosen/penerimaan_proposal');
            }
        }
    }
}
