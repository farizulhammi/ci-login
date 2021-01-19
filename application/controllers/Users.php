<?php

class Users extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_users');
        // $this->load->library('form_validation');

      
    }


    function index(){
        $this->load->view('index');
    }

    function login(){
        if($this->session->has_userdata('login')){
            redirect(base_url('dash'));
        }
        $this->load->view('auth/login');
    }

    function login_get(){
        $usern = $this->input->post('username');
        $pass = $this->input->post('password');

        $data = [
            'username' => $usern,
            'password' => $pass
        ];
        $cek_login = $this->m_users->cek_login($data, 'users')->num_rows();

        if($cek_login != 1){

            $data_sess = [
                'username' => $usern,
                'login' => true

            ];

            $this->session->set_userdata($data_sess);
            redirect(base_url('dash'));
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}