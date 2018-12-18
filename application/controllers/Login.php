<?php 

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index()
    {
        //validasi jika user belum login
        if($this->session->userdata('masuk') == TRUE){
            $url=base_url('home');
            redirect($url);
        }else{
            $data['judul'] = 'Login';
            $this->load->view('templates/header',$data);
            $this->load->view('login/login',$data);
            $this->load->view('templates/footer');
        }
    }

    function auth()
    {
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

        $cek_dosen = $this->Login_model->auth_dosen($username,$password);

        if($cek_dosen->num_rows() > 0)
        {
            // jika login sebagai dosen
            $data = $cek_dosen->row_array();
            $this->session->set_userdata('masuk',true);
            if($data['level']=='1')
            {
                // akses admin
                $this->session->set_userdata('akses','1');
                $this->session->set_userdata('ses_id',$data['nip']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect(base_url());
            }
            else 
            {
                $this->session->set_userdata('akses','2');
                $this->session->set_userdata('ses_id',$data['nip']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect(base_url());
            }
        }
        else 
        {
            // jika login sebagai siswa
            $cek_mahasiswa = $this->Login_model->auth_mahasiswa($username,$password);
            if($cek_mahasiswa->num_rows() > 0){
                $data = $cek_mahasiswa->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','3');
                $this->session->set_userdata('ses_id',$data['nrp']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect(base_url());
            }else
            {  
                // jika username dan password tidak ditemukan atau salah
                $url=base_url();
                $this->session->set_flashdata('flash','Username Atau Password Salah !!!');
                redirect($url);
            }
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
}
