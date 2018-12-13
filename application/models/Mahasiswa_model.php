<?php

class Mahasiswa_model extends CI_model {
    public function getAllMahasiswa()
    {
        // $query = $this->db->get("mahasiswa");
        // return $query->result_array();

        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = array(
            'nama'    => $this->input->post('nama', true),
            'nrp'     => $this->input->post('nrp', true),
            'email'   => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        );
        
        $this->db->insert('mahasiswa', $data);
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('mahasiswa');
    }
}


