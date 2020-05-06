<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Racun_hama extends CI_Controller {


	
    function __construct(){
        parent::__construct();
        $this->load->model('M_rw');
        
    }
	public function index()
	{   
    $this->load->model('m_rw');
	$data['query'] = $this->m_rw->get_spektisida();
    $data['racun']= $this->M_rw->tampilkan1();
	$this->load->view('customer/view_hama',$data);
    }

    public function foto()
    { 
    $data['proses'] = $this->m_rw->tampilkan_galeri1();
    $this->load->view('customer/foto_spektisida',$data);
    }
	
}
