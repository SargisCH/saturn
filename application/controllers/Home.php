<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index($page = 'home'){
			/*if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					show_404();
			}*/
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
            $config['next_tag_open'] = '<div class="buttons_pagination" id="next_page">';
            $config['next_tag_close'] = '</div>';
            $config['next_link'] = '<i class="fa fa-arrow-right" aria-hidden="true"></i><span>Next</span>';
            $config['prev_tag_open'] = '<div class="buttons_pagination">';
            $config['prev_tag_close'] = '</div>';
            $config['prev_link'] = '<i class="fa fa-arrow-left" aria-hidden="true"></i><span>PREVIOUS</span>';
			$this->pagination->initialize($config);
			$data['products'] = $this->product_model->get_products($config['per_page'], $this->uri->segment(3));
			$this->load->view('master', $data);
	}
}