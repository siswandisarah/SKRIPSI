<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_rw');      
    }

	public function index()
	{
		$this->load->view('Customer/view_home');
	}
	public function kecamatan_bolaang()
	{	
		$data['query'] = $this->m_rw->get_tertinggi();
		$data['sum'] =$this->M_rw->get_sum();
		$data['hasil']= $this->M_rw->informasi_pertanian2();	
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Bolaang'));
		$this->load->view('partials3/partial_bolaang_navbar');
		$this->load->view('customer/kecamatan/view_bolaang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}

	public function kecamatan_poigar()
	{	
		$data['query'] = $this->m_rw->get_tertinggi2();
		$data['sum'] =$this->M_rw->get_sum1();
		$data['hasil']= $this->M_rw->informasi_pertanian3();
	
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Poigar'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/kecamatan/view_poigar',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}
	public function kecamatan_dumoga_barat()
	{	
		$data['query'] = $this->m_rw->get_tertinggi3();
		$data['sum'] =$this->M_rw->get_sum2();
		$data['hasil']= $this->M_rw->informasi_pertanian4();		
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Dumoga Barat'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/kecamatan/view_dumoga_barat',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}
	public function kecamatan_dumoga_timur()
	{	
		$data['query'] = $this->m_rw->get_tertinggi4();
		$data['sum'] =$this->M_rw->get_sum3();
		$data['hasil']= $this->M_rw->informasi_pertanian5();		
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Dumoga Timur'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/kecamatan/view_dumoga_timur',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}
	public function kecamatan_dumoga_utara()
	{	
		$data['query'] = $this->m_rw->get_tertinggi5();
		$data['sum'] =$this->M_rw->get_sum4();
		$data['hasil']= $this->M_rw->informasi_pertanian6();		
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Dumoga Utara'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/kecamatan/view_dumoga_utara',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}
	public function kecamatan_lolayan()
	{	
		$data['query'] = $this->m_rw->get_tertinggi6();
		$data['sum'] =$this->M_rw->get_sum5();
		$data['hasil']= $this->M_rw->informasi_pertanian7();		
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Lolayan'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/kecamatan/view_lolayan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}
	public function kecamatan_passi_barat()
	{	
		$data['query'] = $this->m_rw->get_tertinggi7();
		$data['sum'] =$this->M_rw->get_sum6();
		$data['hasil']= $this->M_rw->informasi_pertanian8();		
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Kecamatan Passi Barat'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/kecamatan/view_passi_barat',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
	}



	
	
}
