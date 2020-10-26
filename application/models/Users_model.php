<?php

class Users_model extends CI_model
{
    //create  user
    public function create($formArray)
    {
        $this->db->insert('users', $formArray);
    }

    //login user
    public function ckeckUser($login_email, $login_password)
    {
        $user = $this->db->where(['email' => $login_email, 'password' => $login_password])->get('users')->result_array();
        if ($user) {
            return $user;
        } else {
            return 'failed';
        }
    }


    //show data
    public function showData($login_email)
    {
        $this->db->where('email', $login_email);
        return $user = $this->db->get('users')->row_array();
    }
}
