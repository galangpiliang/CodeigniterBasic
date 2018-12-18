<?php

class Home extends CI_Controller{
    
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->session->userdata('ses_nama');
        $this->load->view('templates/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }
}

