<?php

class User extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('session');

    }

    public function index()
    {
        $this->load->view("register.php");
    }


    public function register_user(){
        $query=array(
            'magv'=>$this->input->post('magv'),
            'tengv'=>$this->input->post('tengv'),
            'diachi'=>($this->input->post('diachi')),
            'ngaysinh'=>$this->input->post('ngaysinh'),
            'gioitinh'=>$this->input->post('gioitinh'),
            'trinhdo'=>$this->input->post('trinhdo')
        );
        print_r($query);

        $magv_check=$this->user_model->magv_check($query['magv']);

        if($magv_check){
            $this->user_model->register_user($query);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('user/user_profile');

        }
        else{

            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            redirect('user');


        }
    }
    public function update()
    {
        $this->load->view("update.php");
    }


    public function update_user(){
        $query = array(
            'magv'=>$this->input->post('magv'),
            'tengv'=>$this->input->post('tengv'),
            'diachi'=>$this->input->post('diachi'),
            'ngaysinh'=>$this->input->post('ngaysinh'),
            'gioitinh'=>$this->input->post('gioitinh'),
            'trinhdo'=>$this->input->post('trinhdo')
        );

        $magv_check=$this->user_model->magv_check($query['magv']);

        if($magv_check){
            $this->user_model->update_user($query);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            update('user/user_profile');

        }
        else{

            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->update('users');


        }
    }


    public function login_view(){
        if(isset($_SESSION["username"])){
            $data['users'] = $this->user_model->get_users();
            $this->load->view('user_profile.php',$data);
        } else{

            $this->load->view("login.php");
        }
    }

    function login_user(){
        $user_login=array(
            'username'=>$this->input->post('username'),
            'password'=>($this->input->post('password'))

        );

        $data=$this->user_model->login_user($user_login['username'],$user_login['password']);
        if($data)
        {
            $_SESSION["username"] = $user_login['username'];
            $data['users'] = $this->user_model->get_users();
            $this->load->view('user_profile.php',$data);
        }
        else{
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->load->view("login.php");

        }


    }
    function user_profile(){
        $data['users'] = $this->user_model->get_users();
        $this->load->view('user_profile.php',$data);

    }

    public function user_logout(){

        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
    }


}

?>
