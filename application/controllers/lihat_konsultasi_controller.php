<?php

class lihat_konsultasi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KonsultasiModel');
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $data['judul'] = 'Lihat Pertanyaan';
        $data['user'] = $this->session->userdata('user');
        $data['konsultasi'] = $this->KonsultasiModel->getById($id);

        $this->load->model('KonsultasiModel');
        $this->load->view('templates/header', $data);
        $this->load->view('Konsultasi/lihat_konsultasi', $data);
        $this->load->view('templates/footer');
    }
}
