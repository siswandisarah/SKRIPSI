<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_rw');      
    }
	public function inobonto_1()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_inobonto1();
        $data['hasil']= $this->M_rw->informasi_inobonto1();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Inobonto 1'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_inobonto1',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function inobonto_2()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_inobonto2();
        $data['hasil']= $this->M_rw->informasi_inobonto2();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Inobonto 2'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_inobonto2',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function ambang_1()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ambang1();
        $data['hasil']= $this->M_rw->informasi_ambang1();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Ambang 1'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_ambang1',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');		
    }
    public function ambang_2()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ambang2();
        $data['hasil']= $this->M_rw->informasi_ambang2();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Ambang 2'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_ambang2',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');		
    }
    public function Tadoy()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tadoy();
        $data['hasil']= $this->M_rw->informasi_tadoy();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tadoy'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_tadoy',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');		
    }
    public function Tadoy_1()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tadoy1();
        $data['hasil']= $this->M_rw->informasi_tadoy1();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tadoy 1'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_tadoy1',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function Bolaang()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bolaang();
        $data['hasil']= $this->M_rw->informasi_bolaang();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bolaang'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_bolaang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function bantik()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bantik();
        $data['hasil']= $this->M_rw->informasi_bantik();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bantik'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_bantik',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function langagon()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_langagon();
        $data['hasil']= $this->M_rw->informasi_langagon();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Langagon'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_langagon',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function lolan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_lolan();
        $data['hasil']= $this->M_rw->informasi_lolan();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Lolan'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_lolan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function solimandungan_1()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_solimandungan1();
        $data['hasil']= $this->M_rw->informasi_solimandungan1();
		$this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Solimandungan 1'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_solimandungan1',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
    }
    public function solimandungan_2()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_solimandungan2();
        $data['hasil']= $this->M_rw->informasi_solimandungan2();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Solimandungan 2'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_bolaang/desa_solimandungan2',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');	
	}
    ///ini batas untuk desa kecamatan Bolaang
    public function gogaluman()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_gogaluman();
        $data['hasil']= $this->M_rw->informasi_gogaluman();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Gogaluman'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_gogaluman',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mariri_baru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mariri_baru();
        $data['hasil']= $this->M_rw->informasi_mariri_baru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mariri Baru'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_mariri_baru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mariri_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mariri_dua();
        $data['hasil']= $this->M_rw->informasi_mariri_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mariri Dua'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_mariri_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mariri_lama()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mariri_lama();
        $data['hasil']= $this->M_rw->informasi_mariri_lama();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mariri Lama'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_mariri_lama',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mariri_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mariri_satu();
        $data['hasil']= $this->M_rw->informasi_mariri_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mariri Satu'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_mariri_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function nanasi()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_nanasi();
        $data['hasil']= $this->M_rw->informasi_nanasi();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Nanasi'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_nanasi',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function nanasi_timur()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_nanasi_timur();
        $data['hasil']= $this->M_rw->informasi_nanasi_timur();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Nanasi Timur'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_nanasi_timur',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function nonapan_baru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_nonapan_baru();
        $data['hasil']= $this->M_rw->informasi_nonapan_baru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Nonapan Baru'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_nonapan_baru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function nonapan_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_nonapan_dua();
        $data['hasil']= $this->M_rw->informasi_nonapan_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Nonapan Dua'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_nonapan_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function nonapan_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_nonapan_satu();
        $data['hasil']= $this->M_rw->informasi_nonapan_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Nonapan Satu'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_nonapan_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function poigar()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_poigar();
        $data['hasil']= $this->M_rw->informasi_poigar();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Poigar'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_poigar',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tiberias()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tiberias();
        $data['hasil']= $this->M_rw->informasi_tiberias();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tiberias'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_tiberias',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function wineru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_wineru();
        $data['hasil']= $this->M_rw->informasi_wineru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Wineru'));
		$this->load->view('partials3/partial_masyarakat_navbar');
		$this->load->view('customer/desa_kecamatan_poigar/desa_wineru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    
    ///batas desa di kecamatan poigar

    public function doloduo()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_doloduo();
        $data['hasil']= $this->M_rw->informasi_doloduo();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa doloduo'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_doloduo',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function ibolian()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ibolian();
        $data['hasil']= $this->M_rw->informasi_ibolian();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa ibolian'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_ibolian',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function ibolian_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ibolian_satu();
        $data['hasil']= $this->M_rw->informasi_ibolian_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Ibolian Satu'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_ibolian_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function ikhwan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ikhwan();
        $data['hasil']= $this->M_rw->informasi_ikhwan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa ikhwan'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_ikhwan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function kosio()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_kosio();
        $data['hasil']= $this->M_rw->informasi_kosio();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa kosio'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_kosio',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function kosio_timur()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_kosio_timur();
        $data['hasil']= $this->M_rw->informasi_kosio_timur();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa kosio timur'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_kosio_timur',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function matayangan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_matayangan();
        $data['hasil']= $this->M_rw->informasi_matayangan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa matayangan'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_matayangan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mekaruo()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mekaruo();
        $data['hasil']= $this->M_rw->informasi_mekaruo();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa mekaruo'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_mekaruo',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function toraut()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_toraut();
        $data['hasil']= $this->M_rw->informasi_toraut();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa toraut'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_toraut',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function uuwan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_uuwan();
        $data['hasil']= $this->M_rw->informasi_uuwan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa uuwan'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_uuwan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function wangga_baru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_wangga_baru();
        $data['hasil']= $this->M_rw->informasi_wangga_baru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa wangga baru'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_wangga_baru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function werdhi_agung()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_werdhi_agung();
        $data['hasil']= $this->M_rw->informasi_werdhi_agung();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa werdhi agung'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_werdhi_agung',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function werdhi_agung_selatan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_werdhi_agung_selatan();
        $data['hasil']= $this->M_rw->informasi_werdhi_agung_selatan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa werdhi agung selatan'));
		$this->load->view('partials3/partial_dumoga_barat_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_barat/desa_werdhi_agung_selatan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }

    //batas desa" kecamatan dumoga barat

    public function bumbungon()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bumbungon();
        $data['hasil']= $this->M_rw->informasi_bumbungon();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bumbungon'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_bumbungon',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function dumoga()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_dumoga();
        $data['hasil']= $this->M_rw->informasi_dumoga();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Dumoga'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_dumoga',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function dumoga_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_dumoga_satu();
        $data['hasil']= $this->M_rw->informasi_dumoga_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Dumoga Satu'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_dumoga_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function dumoga_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_dumoga_dua();
        $data['hasil']= $this->M_rw->informasi_dumoga_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Dumoga Dua'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_dumoga_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function imandi()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_imandi();
        $data['hasil']= $this->M_rw->informasi_imandi();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Imandi'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_imandi',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function kanaan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_kanaan();
        $data['hasil']= $this->M_rw->informasi_kanaan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Kanaan'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_kanaan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function kembang()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_kembang();
        $data['hasil']= $this->M_rw->informasi_kembang();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Kembang'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_kembang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function modomang()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_modomang();
        $data['hasil']= $this->M_rw->informasi_modomang();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Modomang'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_modomang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mogoyunggung()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mogoyunggung();
        $data['hasil']= $this->M_rw->informasi_mogoyunggung();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mogoyunggung'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_mogoyunggung',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    
    public function ponompian()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_ponompian();
        $data['hasil']= $this->M_rw->informasi_ponompian();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Ponompian'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_ponompian',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function pusian()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_pusian();
        $data['hasil']= $this->M_rw->informasi_pusian();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Pusian'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_pusian',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function siniyung()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_siniyung();
        $data['hasil']= $this->M_rw->informasi_siniyung();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Siniyung'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_siniyung',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tonom()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tonom();
        $data['hasil']= $this->M_rw->informasi_tonom();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tonom'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_tonom',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function toruakat()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_toruakat();
        $data['hasil']= $this->M_rw->informasi_toruakat();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Toruakat'));
		$this->load->view('partials3/partial_dumoga_timur_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_timur/desa_toruakat',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
///BATAS KECAMATAN DUMOGA TIMUR
    public function bonawang()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bonawang();
        $data['hasil']= $this->M_rw->informasi_bonawang();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bonawang'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_Bonawang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function dondomon()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_dondomon();
        $data['hasil']= $this->M_rw->informasi_dondomon();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Dondomon'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_dondomon',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
     public function konarom()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_konarom();
        $data['hasil']= $this->M_rw->informasi_konarom();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Konarom'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_konarom',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mopuya_utara()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mopuya_utara();
        $data['hasil']= $this->M_rw->informasi_mopuya_utara();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopuya Utara'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_mopuya_utara',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mopuya_selatan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mopuya_selatan();
        $data['hasil']= $this->M_rw->informasi_mopuya_selatan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopuya Selatan'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_mopuya_selatan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function osion()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_osion();
        $data['hasil']= $this->M_rw->informasi_osion();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopuya Osion'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_osion',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tapadaka_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tapadaka_satu();
        $data['hasil']= $this->M_rw->informasi_tapadaka_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopuya Tapadaka Satu'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_tapadaka_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tapadaka_utara()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tapadaka_utara();
        $data['hasil']= $this->M_rw->informasi_tapadaka_utara();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopuya Tapadaka Utara'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_tapadaka_utara',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tumokang_baru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tumokang_baru();
        $data['hasil']= $this->M_rw->informasi_tumokang_baru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tumokang Baru'));
		$this->load->view('partials3/partial_dumoga_utara_navbar');
		$this->load->view('customer/desa_kecamatan_dumoga_utara/desa_tumokang_baru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
   ////batas kecamatan lolayan

    public function abak()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_abak();
        $data['hasil']= $this->M_rw->informasi_abak();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Abak'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_abak',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    
    public function bakan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bakan();
        $data['hasil']= $this->M_rw->informasi_bakan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bakan'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_bakan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function bombanon()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bombanon();
        $data['hasil']= $this->M_rw->informasi_bombanon();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bombanon'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_bombanon',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function kopandakan_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_kopandakan_dua();
        $data['hasil']= $this->M_rw->informasi_kopandakan_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Kopandakan Dua'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_kopandakan_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function matali_baru()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_matali_baru();
        $data['hasil']= $this->M_rw->informasi_matali_baru();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Matali Baru'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_matali_baru',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mengkang()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mengkang();
        $data['hasil']= $this->M_rw->informasi_mengkang();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mengkang'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_mengkang',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mopait()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mopait();
        $data['hasil']= $this->M_rw->informasi_mopait();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopait'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_mopait',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function mopusi()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mopusi();
        $data['hasil']= $this->M_rw->informasi_mopusi();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopusi'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_mopusi',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tonayon_selatan()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tonayon_selatan();
        $data['hasil']= $this->M_rw->informasi_tonayon_selatan();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tonayon Selatan'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_tonayon_selatan',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tonayon_utara()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_mopusi();
        $data['hasil']= $this->M_rw->informasi_mopusi();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Mopusi'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_tonayon_utara',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tungoi_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tungoi_satu();
        $data['hasil']= $this->M_rw->informasi_tungoi_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tungoi Satu'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_tungoi_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function tungoi_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_tungoi_dua();
        $data['hasil']= $this->M_rw->informasi_tungoi_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Tungoi Dua'));
		$this->load->view('partials3/partial_lolayan_navbar');
		$this->load->view('customer/desa_kecamatan_lolayan/desa_tungoi_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function bintau()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bintau();
        $data['hasil']= $this->M_rw->informasi_bintau();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bntau'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_bintau',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function bulud()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_bulud();
        $data['hasil']= $this->M_rw->informasi_bulud();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Bulud'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_bulud',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function inuai()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_inuai();
        $data['hasil']= $this->M_rw->informasi_inuai();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Inuai'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_inuai',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function lobong()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_lobong();
        $data['hasil']= $this->M_rw->informasi_lobong();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Lobong'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_lobong',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function muntoi()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_muntoi();
        $data['hasil']= $this->M_rw->informasi_muntoi();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Muntoi'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_muntoi',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function muntoi_timur()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_muntoi_timur();
        $data['hasil']= $this->M_rw->informasi_muntoi_timur();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Muntoi Timur'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_muntoi_timur',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function passi_satu()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_passi_satu();
        $data['hasil']= $this->M_rw->informasi_passi_satu();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Passi Satu'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_passi_satu',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    public function passi_dua()
	{	
        $data['sum'] =$this->M_rw->get_sum_desa_passi_dua();
        $data['hasil']= $this->M_rw->informasi_passi_dua();
        $this->load->view('partials3/partial_masyarakat_header',array('title' => 'Desa Passi Dua'));
		$this->load->view('partials3/partial_passi_barat_navbar');
		$this->load->view('customer/desa_kecamatan_passi_barat/desa_passi_dua',$data);	
		$this->load->view('partials3/partial_masyarakat_footer');
    }
    
   
}
