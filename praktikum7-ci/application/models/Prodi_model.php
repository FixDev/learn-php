<?php
class Prodi_model extends CI_Model
{
    private $table_name = 'prodi';

    public function getAllData()
    {
        return $this->db->get($this->table_name)->result();
    }

    public function findById($id)
    {
        $this->db->where('kode', $id);
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
