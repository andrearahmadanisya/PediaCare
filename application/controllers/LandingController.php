<?php

class LandingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LandingModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Landing';
        $this->load->view('templates/header', $data);
        $this->load->view('landing');
        $this->load->view('templates/footer');
    }
}
