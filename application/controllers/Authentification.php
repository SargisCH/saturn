<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {
    public function login (){
        $data_login['title'] = "Login";
        $data_login['content'] = 'login';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('authentification_model');
            if($data_login['users'] = $this->authentification_model->login($username)){
                //$this->load->view('master', $data_login);
                //var_dump($data_login['users']);
                foreach ($data_login['users'] as $item){
                    if(password_verify($password, $item['password'])){
                        redirect(base_url() . 'home');
                    }else {
                        $data_login['error'] = "Invalid username or Password";
                        $this->load->view('master', $data_login);
                    }
                }
            }
        }
        else{
            $this->load->view('master', $data_login);
        }

    }
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
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data['email'] = $this->input->post('email');
            $data['created_at'] = date('y-m-d');
            $this->load->model('authentification_model');
            $this->authentification_model->register($data);
            $data_register['success'] = "You are registered";
            $this->load->view('master', $data_register);
        }
    }
}