<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {
	public function index($page = 'archive'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					show_404();
			}
			$data['content'] = 'pages/archive';
			$data['title'] = ucfirst($page);
			$this->load->helper('url');
			$this->load->view('master', $data);
	}
}