<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_racun extends CI_Controller {

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
        $data = array('racun' => []);

        if (!empty($keyword)) {
            $result = $this->M_rw->cari_data($keyword);
        }

        if (!empty($keyword) && $result) {
            $data['racun']= $result->result_array();
        } else {
            $data['racun']= $this->M_rw->tampilkan();
        }

        $this->load->view('partials2/partial_admin_header',array('title' => 'Daftar Pestisida'));
    		$this->load->view('partials2/partial_admin_navbar');
        $this->load->view('admin/view_racunadmin',$data);
        $this->load->view('partials2/partial_admin_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database
  

   public function detail($id)
   {
       $this->load->model('m_rw');
       $detail = $this->m_rw->detail_data($id);
       $data['detail'] = $detail;
       $this->load->view('partials/partial_rw_header',array('title' => 'Detail Racun "'.$detail->nama_racun.'"'));
   		 $this->load->view('partials/partial_rw_navbar');
       $this->load->view('rw/view_detailracun', $data);
       $this->load->view('partials/partial_rw_footer');
    }

    public function cari()
    {
        $keyword = $this->input->post('keyword');
        $data['cari']= $this->m_rw->cari_data($keyword);
        redirect('/rw/informasi_racun', $data);
    }

    //batasssssss

}
