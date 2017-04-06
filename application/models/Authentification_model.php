<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification_model extends CI_Model{
    public function register($data){
        $this->db->insert('users', $data);
    }
    public function login($username){
        $this->db->where('username', $username);
        $query = $this->db->get("users");
        if($query->num_rows() > 0){
            return $query->result_array();
        } else {
            return false;
        }
    }
}