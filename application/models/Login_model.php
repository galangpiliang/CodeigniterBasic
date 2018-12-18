<?php 

class Login_model extends CI_Model{
    // cek nip dan password dosen
    public function auth_dosen($username,$password)
    {
        return  $this->db->query("
            SELECT * FROM dosen WHERE (nip='$username' OR nama='$username') AND pass=MD5('$password') LIMIT 1 
        ");         
    }

    // cek nrp dan password dosen
    public function auth_mahasiswa($username,$password)
    {
        return  $this->db->query("
            SELECT * FROM mahasiswa WHERE (nrp='$username' OR nama='$username') AND pass=MD5('$password') LIMIT 1 
        ");         
    }
}
