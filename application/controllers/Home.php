<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($page = 'home'){
			$data['content'] = 'pages/home';
			$data['title'] = 'home';
			$this->load->helper('url');
			$this->load->model('product_model');
            $config['base_url'] = base_url() . 'home/index';
            $config['total_rows'] = $this->db->count_all('products');
            $config['per_page'] = 1;
            $config['num_links'] = 2;
            $config['first_link'] = FALSE;
            $config['last_link'] = FALSE;
            $config['display_pages'] = FALSE;
            $config['full_tag_open'] = '<div>';
            $config['full_tag_close'] = '</div>';
            $config['next_tag_open'] = '<div>';
            $config['next_tag_close'] = '</div>';
            $config['next_link'] = '<div class="buttons_pagination" id="next_page"><span>Next</span><i class="fa fa-arrow-right" aria-hidden="true"></i></div>';
            $config['prev_tag_open'] = '<div>';
            $config['prev_tag_close'] = '</div>';
            $config['prev_link'] = '<div class="buttons_pagination" ><i class="fa fa-arrow-left" aria-hidden="true"></i><span>PREVIOUS</span></div>';
			$this->pagination->initialize($config);
			$data['products'] = $this->product_model->get_products($config['per_page'], $this->uri->segment(3));
			$this->load->view('master', $data);
	}
}