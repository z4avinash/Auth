<?php
class Users extends CI_Controller
{
    //Index function
    public function index()
    {
        $this->load->view('index');
    }

    //Register function
    public function register()
    {

        $this->load->model('Users_model');
        $this->form_validation->set_rules('full_name', 'Full Name: ', 'required');
        $this->form_validation->set_rules('username', 'Username: ', 'required');
        $this->form_validation->set_rules('email', 'E-mail: ', 'required');
        $this->form_validation->set_rules('password', 'Password: ', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            //saving data to the database
            $formArray = array();
            $formArray['full_name'] = $this->input->post('full_name');
            $formArray['username'] = $this->input->post('username');
            $formArray['email'] = $this->input->post('email');
            $hashedPassword = $this->input->post('password');
            $formArray['password'] = password_hash($hashedPassword, PASSWORD_DEFAULT);
            $formArray['created_at'] = date('Y-m-d H:i:s');
            $this->Users_model->create($formArray);
            redirect(base_url() . 'index.php/Users/login');
        }
    }

    //Login function
    public function login()
    {
        $this->load->model('Users_model');


        // checking if the user is logged in
        if (!empty($this->session->userdata['isLoggedIn'])) {


            //authenticate and then show dashboard
            $query = $this->Users_model->ckeckUser($this->session->userdata['email'], $this->session->userdata['password']);
            $data['user'] = $this->Users_model->showData($this->session->userdata['email']);
            $this->load->view('dashboard', $data);
        } else {
            $this->form_validation->set_rules('login_email', 'E-mail: ', 'required');
            $this->form_validation->set_rules('login_password', 'Password: ', 'required');

            $login_email = $this->input->post('login_email');
            $login_password = $this->input->post('login_password');


            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {

                //authenticate and then show dashboard
                $data['user'] = $this->Users_model->showData($login_email);
                if (!empty($data['user'])) {
                    if (password_verify($login_password, $data['user']['password'])) {
                        $this->load->view('dashboard', $data);
                        $this->session->set_userdata('email', $login_email);
                        $this->session->set_userdata('password', $login_password);
                        $this->session->set_userdata('isLoggedIn', true);
                    } else {
                        $this->load->view('login');
                        echo "<script>alert('Wrong email or password!!');</script>";
                    }
                } else {
                    $this->load->view('login');
                    echo "<script>alert('Wrong email or password!!');</script>";
                }
            }
        }
    }


    //Log out
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/Users/index');
    }
}
