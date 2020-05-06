<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuk extends CI_Controller {


	
    function __construct(){
        parent::__construct();
        $this->load->model('M_rw');
        
    }
	public function index()
	{   
     $this->load->model('m_rw');
     $data['query'] = $this->m_rw->get_pupuk();
    $data['pupuk']= $this->M_rw->tampilkan_data_pupuk1();
	$this->load->view('customer/view_pupuk',$data);
    }

	
}
