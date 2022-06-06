<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('mahasiswa_model', 'mhs');
        $list_mahasiswa = $this->mhs->getAllData();

        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function view()
    {
        $nim = $this->input->get('id');

        $this->load->model('mahasiswa_model', 'mhs');
        $queried_mhs = $this->mhs->findById($nim);

        $data['mhs'] = $queried_mhs;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layouts/footer');
    }
    public function create()
    {
        $data['judul'] = 'Form Input Mahasiswa';

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/create', $data);
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('mahasiswa_model', 'mhs');

        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('name');
        $_gender = $this->input->post('jk');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_prodi_kode = $this->input->post('prodi');
        $_ipk = $this->input->post('ipk');

        $this->mhs->save([
            $_nim,
            $_nama,
            $_gender,
            $_tmp_lahir,
            $_tgl_lahir,
            $_prodi_kode,
            $_ipk
        ]);

        $queried_mhs = $this->mhs->findById($_nim);

        $data['mhs'] = $queried_mhs;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layouts/footer');
    }
}
