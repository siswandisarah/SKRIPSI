<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email'))
		{
			redirect('login/');
		}
	}
	public function index()
	{	
		$this->load->view('partials2/partial_admin_header',array('title' => 'Home Halaman ADMIN'));
		$this->load->view('partials2/partial_admin_navbar');
		$this->load->view('admin/view_homeAdmin');
		$this->load->view('partials2/partial_admin_footer');
	}
	
}
