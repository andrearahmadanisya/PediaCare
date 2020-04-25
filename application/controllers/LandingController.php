<?php

class LandingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Landing';
        $data['user'] = $this->session->userdata('user');
        $this->load->view('templates/header', $data);
        $this->load->view('landing');
        $this->load->view('templates/footer');
    }
}
