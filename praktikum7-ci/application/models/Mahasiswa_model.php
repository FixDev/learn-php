<?php

use LDAP\Result;

class Mahasiswa_model extends CI_Model
{
    private $table_name = 'mahasiswa';

    public function getAllData()
    {
        return $this->db->get($this->table_name)->result();
    }

    public function findById($id)
    {
        $this->db->where('nim', $id);
        return $this->db->get($this->table_name)->row();
    }

    public function save($data)
    {
    }
    public function update($data)
    {
    }
    public function delete($data)
    {
    }
}
