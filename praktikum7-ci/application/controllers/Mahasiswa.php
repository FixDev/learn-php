<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs');
        $list_mahasiswa = $this->mhs->getAllData();

        $data['list_prodi'] = $list_mahasiswa;

        $this->load->view('mahasiswa/index', $data);
    }
}
