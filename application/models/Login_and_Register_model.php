<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_and_Register_model extends CI_Model{
    public function register($data){
        $this->db->insert('users', $data);
    }
    public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get("users");
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
}