<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_penanaman_dan_proses_panen extends CI_Controller {

    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('email'))
		{
			redirect('login/');
		}
        $this->load->model('M_rw');
    }
	public function index()
	{
        $data['proses'] = $this->m_rw->tampilkan_proses1();
       $this->load->view('partials2/partial_admin_header',array('title' => 'Daftar Pestisida'));
    	$this->load->view('partials2/partial_admin_navbar');
        $this->load->view('admin/view_proses_penanaman',$data);
        $this->load->view('partials2/partial_admin_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database


   public function proses_detail1($id)
   {
       $this->load->model('m_rw');
       $detail = $this->m_rw->detail_proses_data1($id);
       $data['detail'] = $detail;
       $this->load->view('partials2/partial_admin_header',array('title' => 'Detail Data Proses'));
       $this->load->view('partials2/partial_admin_navbar');
       $this->load->view('/admin/view_proses_detail', $data);
       $this->load->view('partials2/partial_admin_footer');
    }

   



}
