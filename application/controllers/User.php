<?php

class User extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper(array('form', 'url','file'));
        $this->load->model('user_model');
        $this->load->library('session', 'upload');

    }

    public function layout()
    {
        $this->load->view("layout.php");
    }

    public function register()
    {
        $this->load->view("register.php");
    }

    public function register_user()
    {

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'assets/upload';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['image']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                $image = '';
            }

                //in cau truc du lieu cua file da upload
                echo "<pre>";
                print_r($image);
                echo "</pre>";
            }

            else {
                //hien thi lỗi nếu có
                $error = $this->upload->display_errors();
                echo $error;
            }

        $query = array(
            'id' => $this->input->post('id'),
            'magv' => $this->input->post('magv'),
            'tengv' => $this->input->post('tengv'),
            'diachi' => ($this->input->post('diachi')),
            'ngaysinh' => $this->input->post('ngaysinh'),
            'gioitinh' => $this->input->post('gioitinh'),
            'trinhdo' => $this->input->post('trinhdo'),
            'image' => $image
        );
            $magv_check = $this->user_model->magv_check($query['magv']);
            if ($magv_check) {
                $this->user_model->register_user($query);
                $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
                redirect('user/user_profile');
            } else {
                $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
                redirect('user');
            }
        }


    public function update()
    {
        $id = $_GET['id'];
        $data['users'] = $this->user_model->show_user_id($id);
        $this->load->view('update', $data);
    }
    public function update_user_id()
    {
        $id = $this->input->post('id');
        $data = array(
            'magv' => $this->input->post('magv'),
            'tengv' => $this->input->post('tengv'),
            'diachi' => $this->input->post('diachi'),
            'ngaysinh' => $this->input->post('ngaysinh'),
            'gioitinh' => $this->input->post('gioitinh'),
            'trinhdo' => $this->input->post('trinhdo')
        );
        $this->user_model->update_user_id($id, $data);
        $this->user_model->show_user_id($id);
        $data['users'] = $this->user_model->get_users();
        $this->load->view('admin/main.php',$data);
    }


    //xóa dữ liệu trang
    public  function delete($id, $image)

    {
        $id = $this->input->get('id');
        $image = $this->input->get('image');
        unlink("upload/".$image);
        if ($this->user_model->delete($id, $image)) {
            $data['users'] = $this->user_model->get_users();
            $this->load->view('admin/main.php', $data);
        }
    }
    public function login_view(){
        if(isset($_SESSION["username"])){
            $data['users'] = $this->user_model->get_users();
            $this->load->view('admin/main.php',$data);
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
            $this->load->view('admin/main.php',$data);
        }
        else{
            $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->load->view("login.php");

        }


    }
    function user_profile(){
        $data['users'] = $this->user_model->get_users();
        $this->load->view('admin/main.php',$data);

    }

    public function user_logout(){

        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
    }


}

?>
