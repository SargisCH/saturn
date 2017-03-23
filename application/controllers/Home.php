<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($page = 'home'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					show_404();
			}
			$data['content'] = 'pages/home';
			$data['title'] = ucfirst($page);
			$this->load->helper('url');
			$this->load->model('product_model');
			$data['products'] = $this->product_model->get_products();
            //$this->load->view("get_products", $data);
			$this->load->view('master', $data);
	}
}