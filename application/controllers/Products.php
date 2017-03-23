<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('product_model');
   }
        public function index(){
            $data['products'] = $this->product_model->get_products();
            $this->load->view("get_products", $data);
        }
        public function add(){
            $data1['title'] = "Add_product";
            $data1['content'] = 'pages/home';
			$this->load->helper('url');
			$this->load->model('product_model');
			$data1['products'] = $this->product_model->get_products();
            //$this->load->view("get_products", $data);
			$this->load->view('master', $data1);
            $this->load->view('add_product');
        if($this->input->post('submit')){ 
             $config['upload_path'] = './img/photos/';
             $config['allowed_types'] = 'gif|jpg|png|jpeg';
             $config['max_size']	= '1000';
		     $this->load->library('upload', $config);
             $image_data = $this->upload->do_upload();
             //$add['img'] = $image_data['file_name'];
             $data['title'] = $this->input->post('title');
             $data['description'] = $this->input->post('description');
             $data['image_url'] = $this->input->post('userfile');
             $this->product_model->add_product($data);
        }
    }
    public function get(){
            $data['products'] = $this->product_model->get_products();  
            $this->load->view('get_products', $data);
    }
    public function update(){
            $id = $this->uri->segment(3);
            $data_update['products'] = $this->product_model->update_get($id);  
            $this->load->view('update_product_result', $data_update);
         if($this->input->post('submit_update')){
            $data['id'] =  $this->uri->segment(3);
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['image_url'] = $this->input->post('image_url');
             $this->product_model->update_product($data);
        }
    }
    public function delete(){
        $id = $this->uri->segment(3);
        $this->product_model->delete_product($id);
        $this->load->view('delete_product');
    }
}