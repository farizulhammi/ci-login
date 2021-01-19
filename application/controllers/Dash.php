<?php

class Dash extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login') != true){
            redirect(base_url('users'));
        }
    }
    function index(){
        $this->load->view('dash.php');
    }
}