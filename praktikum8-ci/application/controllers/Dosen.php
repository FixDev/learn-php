<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn');
        $all_dosen = $this->dsn->getAllData();

        $data['all_dosen'] = $all_dosen;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
}
