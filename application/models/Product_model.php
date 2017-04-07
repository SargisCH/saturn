<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{
    public function get_products($num, $offset){
        $query = $this->db->get("products",$num, $offset);
        return $query->result_array();
    }
    public function get_username($num,$offset){
        $query = $this->db->get("products", $num, $offset);
        $products_info = $query->result_array();
        foreach ($products_info as $item){
            $product_id =  $item['id'];
        }
        $this->db->where('product_id', $product_id);
        $query_products = $this->db->get("user_products");
        $user_products_info = $query_products->result_array();
        foreach ($user_products_info as $item){
            $user_id = $item['user_id'];
        }
        if(isset($user_id)){
            $user = $user_id;
            $this->db->where('id', $user);
            $query_user = $this->db->get("users");
            $user_info = $query_user->result_array();
            foreach ($user_info as $item){
                $username = $item['username'];
            }
            return $username;
        }
    }
    public function add_product($data){
        if($this->session->has_userdata('username')){
            $this->db->insert('products', $data);
            $session_username = $this->session->userdata('username');
            $this->db->where('username', $session_username);
            $query = $this->db->get("users");
            $user_info = $query->result_array();
            foreach($user_info as $item){
                $user_id = $item['id'];
            }
            $this->db->select('id');
            $this->db->order_by('id', 'DESC');
            $this->db->limit(1);
            $this->db->from('products');
            $query_id = $this->db->get();
            $product_info =  $query_id->result_array();
            foreach ($product_info as $item){
                $product_id =  $item['id'];
            };
            $user["user_id"] = $user_id;
            $user["product_id"] = $product_id;
            $this->db->insert('user_products', $user);
        } else {
            $this->db->insert('products', $data);
        }
    }
    public function get_one_product($id){
        $this->db->where('id', $id);
        $query = $this->db->get("products");
        return $query->result_array();
    }
    public function update_get($id){
    	$this->db->where('id', $id);
		$query = $this->db->get("products");
        return $query->result_array();
    }
    public function update_product($data){
        $this->db->where('id', $data['id']);
        $this->db->update('products', $data);
    }
    public function delete_product($id){
        $this->db->where('id', $id );
        $this->db->delete('products');
    }
}