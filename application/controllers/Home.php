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
			$config['base_url'] = base_url() . 'home/index';
			$config['total_rows'] = $this->db->count_all('products');
			$config['per_page'] = 1;
			//$config['uri_segment'] = 3;
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';

			$this->pagination->initialize($config);
			$data['products'] = $this->product_model->get_products($config['per_page'], $this->uri->segment(3));
			$this->load->view('master', $data);
	}
}