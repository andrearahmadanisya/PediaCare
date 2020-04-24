<?php

class JawabKonsultasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KonsultasiModel');
        $this->load->library('form_validation');
        $this->load->model('KonsultasiModel');
    }

    public function index($id)
    {
        $data['judul'] = 'judul Pertanyaan';
        $data['user'] = $this->session->userdata('user');
        $data['konsultasi'] = $this->KonsultasiModel->getById($id);

        $this->form_validation->set_rules('jawaban', 'jawaban', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Konsultasi/JawabKonsultasi', $data);
            $this->load->view('templates/footer');
        } else {
            $jawab = [
                "id_konsultasi" => $id,
                "judul" => $data['konsultasi']['judul'],
                "username" => $data['konsultasi']['username'],
                "question" => $data['konsultasi']['question'],
                "dokter" => $data['user']['username'],
                "answer" => $this->input->post('jawaban'),
            ];
            $this->KonsultasiModel->UpdateKonsultasi($jawab, $id);
            redirect('KonsultasiController');
        }
    }
}
