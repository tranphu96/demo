<?php

class User_model extends CI_model
{


    public function register_user($query)
    {

        $this->db->insert('hsgiaovien', $query);

    }

    public function update_user($query)
    {

        $this->db->update('hsgiaovien', $query);
    }


     public function delete($id){
         $this->load->database();
         $this->db->where('id',$id);
         $this->db->delete('hsgiaovien'); return true;
     }
    public function get_users()
    {

        if ($query = $this->db->get('hsgiaovien')) {
            return $query->result_array();
        } else {
            return null;
        }
    }


    public function login_user($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        if ($query = $this->db->get()) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function magv_check($magv)
    {
        $this->db->select('*');
        $this->db->from('hsgiaovien');
        $this->db->where('magv', $magv);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function __construct()
    {
        parent::__construct();

    }
}
?>
