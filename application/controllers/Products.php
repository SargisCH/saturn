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
        public function add_view(){
            $data1['title'] = "Add_product";
            $data1['content'] = 'add_product';
			$this->load->view('master', $data1);
        }
         public function add(){
                $data1['title'] = "Add_product";
                $data1['content'] = 'add_product';
                $config['upload_path'] = './img/photos/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']	= '1000';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $data['title'] = $this->input->post('title');
                $data['description'] = $this->input->post('description');
                $data['image_url'] = $image_data['file_name'];
                $this->load->library('form_validation');
                $this->form_validation->set_rules('title', 'Title', 'required|min_length[5]');
                $this->form_validation->set_rules('description', 'Description', 'required|min_length[12]');
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('master', $data1);
                }
                else{
                    $this->product_model->add_product($data);
                    $data1['success'] = "Your Data has been added";
                    $this->load->view('master', $data1);
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