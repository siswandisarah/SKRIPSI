<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_pupuk extends CI_Controller {

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
        $keyword = $this->input->get('keyword');
        $data = array('pupuk' => []);

        if (!empty($keyword)) {
            $result = $this->M_rw->cari_data2($keyword);
        }

        if (!empty($keyword) && $result) {
            $data['pupuk']= $result->result_array();
        } else {
            $data['pupuk']= $this->M_rw->tampilkan_pupuk();
        }

        $this->load->view('partials2/partial_admin_header',array('title' => 'Informasi Pupuk'));
    		$this->load->view('partials2/partial_admin_navbar');
	      $this->load->view('admin/view_pupukadmin',$data);
        $this->load->view('partials2/partial_admin_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database
  

}
