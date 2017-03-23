<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{
    public function get_products(){
        $query = $this->db->get("products");
        return $query->result_array();
    }       
    public function add_product($data){
        $this->db->insert('products', $data);
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