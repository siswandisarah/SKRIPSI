<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_tanam_dan_panen extends CI_Controller {


	
    function __construct(){
        parent::__construct();
        $this->load->model('M_rw');
        
    }
	public function index()
	{   
     $this->load->model('m_rw');
     $data['proses']= $this->M_rw->tampilkan_data_prosespanen();
	 $this->load->view('customer/view_proses_panen_tanam',$data);
    }

	
}
