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
		$this->load->view('partials/partial_rw_header',array('title' => 'Home Halaman RW'));
		$this->load->view('partials/partial_rw_navbar');
		$this->load->view('rw/view_homeRw');
		$this->load->view('partials/partial_rw_footer');
	}


}
