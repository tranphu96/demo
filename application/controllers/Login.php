<?php

class Login extends CI_Controller {
    public function index()
    {
        $this->load->view('login');

    }
    public function profile(){
        $this->load->view('user_profile');
    }
}
