<?php

class RegistController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['judul'] = 'Create Account';
        $data['user'] = $this->session->userdata('user');
        $this->load->view('templates/header', $data);
        $this->load->view('Regist');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        // set rule username, password, fullname, email  required
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        // if form_valid gagal load view Regist
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Create Account';
            $this->load->view('templates/header', $data);
            $this->load->view('Regist');
            $this->load->view('templates/footer');
        } else // else berhasil panggil fungsi addAkun di AccountModel
        {
            $this->AccountModel->addAccount();

            // panggil fungsi getUserByUsername dan simpan di variabel
            $this->load->library('session');
            $this->session->set_flashdata('user', $this->AccountModel->getAccountByUsername($this->input->post('username', true)));
            // load home
            redirect('LoginController');
        }
    }
}
