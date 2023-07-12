<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

	public function index()
	{
		$data='';
		$this->load->view('front/blogs', $data, FALSE);
		
	}

}

/* End of file Blogs.php */
/* Location: ./application/controllers/Blogs.php */