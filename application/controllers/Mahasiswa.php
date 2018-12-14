<?php

class Mahasiswa extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        } else {
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        }
        $data['judul'] = 'Daftar Mahasiswa';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['judul'] = 'Form Tambah Data Mahasiswa';
        $data['jurusan'] = ['Teknik Informatika','Teknik Sipil','Multimedia','Animasi','Hukum Pidana'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('mahasiswa','index');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['judul'] = 'Detail Mahasiswa';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        // $data['jurusan'] = $this->Jurusan_model->getAllJurusan();
        $data['jurusan'] = ['Teknik Informatika','Teknik Sipil','Multimedia','Animasi','Hukum Pidana'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/ubah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash','Diubah');
            redirect('mahasiswa','index');
        }
    }
}