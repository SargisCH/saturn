<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_and_Register extends CI_Controller {
    public function login (){
        $data_login['title'] = "Login";
        $data_login['content'] = 'login';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('login_and_register_model');
            if($data_login['users'] = $this->login_and_register_model->login($username, $password)){
                //$this->load->view('master', $data_login);
                redirect(base_url() . 'home');
            } else {
                $data_login['error'] = "Invalid username or Password";
                $this->load->view('master', $data_login);
            }
        }
        else{
            $this->load->view('master', $data_login);
        }

    }
    /*public function register_view(){
        $data_register['title'] = "Register";
        $data_register['content'] = 'register';
        $this->load->view('master', $data_register);
    }*/
    public function register(){
        $data_register['title'] = "Register";
        $data_register['content'] = 'register';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('master', $data_register);
        }
        else{
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['email'] = $this->input->post('email');
            $data['created_at'] = date('y-m-d');
            $this->load->model('login_and_register_model');
            $this->login_and_register_model->register($data);
            $data_register['success'] = "You are registered";
            $this->load->view('master', $data_register);
        }
    }
}