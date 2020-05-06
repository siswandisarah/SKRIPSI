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
       $this->load->view('partials/partial_rw_header',array('title' => 'Daftar Pestisida'));
    	$this->load->view('partials/partial_rw_navbar');
        $this->load->view('rw/view_proses_penanaman',$data);
        $this->load->view('partials/partial_rw_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database
    public function tambah_aksi3()
    {
        $nama  = $this->input->post('nama');
        $nama_petani  = $this->input->post('nama_petani');
        $alamat = $this->input->post('alamat');
        $deskription  = $this->input->post('deskription');
        $foto=$_FILES['foto'];
        if($foto=''){}
        else
        {
            $config['upload_path']      = './assets/foto';

            $config['allowed_types']    ='jpg|png|gif';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('foto'))
            {
                echo"Upload gagal"; die();
            }
            else{
                $foto=$this->upload->data('file_name');
            }

        }

        $data = array(
            'nama'         => $nama,
            'nama_petani'  => $nama_petani,
            'alamat'       => $alamat,
            'foto'         => $foto,
            'deskription'  => $deskription,
        );

        $this->m_rw->input_proses2($data);
        redirect('/Rw/proses_penanaman_dan_proses_panen');

    }

   public function proses_hapus1($id)
   {
       $id = $this->uri->segment(4);
       $this->m_rw->hapus_proses_data1($id);
       redirect('/rw/proses_penanaman_dan_proses_panen');
      // $where = array ('$id' => $id);
      // $this->m_rw->hapus_data($where, 'jenis_racun');
   }

   public function proses_detail1($id)
   {
       $this->load->model('m_rw');
       $detail = $this->m_rw->detail_proses_data1($id);
       $data['detail'] = $detail;
       $this->load->view('partials/partial_rw_header',array('title' => 'Detail Data Proses'));
       $this->load->view('partials/partial_rw_navbar');
       $this->load->view('/rw/view_proses_detail', $data);
       $this->load->view('partials/partial_rw_footer');
    }

   



}
