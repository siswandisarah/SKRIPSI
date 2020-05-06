<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_pertanian extends CI_Controller {

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
        $data = array('hasil' => []);

        if (!empty($keyword)) {
            $result = $this->M_rw->cari_data1($keyword);
        }

        if (!empty($keyword) && $result) {
            $data['hasil']= $result->result_array();
        } else {
            $data['hasil']= $this->M_rw->informasi_pertanian();
        }

        $this->load->view('partials2/partial_admin_header',array('title' => 'Informasi Pertanian'));
    		$this->load->view('partials2/partial_admin_navbar');
	      $this->load->view('admin/view_hasilpanen',$data);
        $this->load->view('partials2/partial_admin_footer');
    }
   

}
