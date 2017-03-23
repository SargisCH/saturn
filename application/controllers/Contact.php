<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index($page = 'contact'){
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					show_404();
			}
			$data['content'] = 'pages/contact';
			$data['title'] = ucfirst($page);
			$this->load->helper('url');
			$this->load->view('master', $data);
	}
}