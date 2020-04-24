<?php

class JawabKonsultasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KonsultasiModel');
        $this->load->library('form_validation');
    }

    public function index($id)
    {
        $data['judul'] = 'judul Pertanyaan';
        $data['user'] = $this->session->userdata('user');
        $data['konsultasi'] = $this->KonsultasiModel->getById($id);

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        // $this->form_validation->set_rules('question', 'question', 'required');
        // $this->form_validation->set_rules('dokter', 'dokter', 'required');
        // $this->form_validation->set_rules('answer', 'answer', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->model('KonsultasiModel');
            $this->load->view('templates/header', $data);
            $this->load->view('Konsultasi/JawabKonsultasi', $data);
            $this->load->view('templates/footer');
        } else {
            $jawab = [
                "id_konsultasi" => $id,
                "judul" => $data['konsultasi']['judul'],
                "username" => $data['konsultasi']['username'],
                "question" => $data['konsultasi']['question'],
                "dokter" => $this->session->userdata('user'),
                "answer" => $this->input->post('answer', true),
            ];
            $this->KonsultasiModel->UpdateKonsultasi($jawab, $id);
            // $id = $this->input->post('id_konsultasi', true);
            $data = $this->konsultasiModel->getById($id);
            redirect('lihat_konsultasi_controller');
        }
    }
}
