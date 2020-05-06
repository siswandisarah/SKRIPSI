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

        $this->load->view('partials/partial_rw_header',array('title' => 'Daftar Pestisida'));
    		$this->load->view('partials/partial_rw_navbar');
        $this->load->view('rw/view_racunRw',$data);
        $this->load->view('partials/partial_rw_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database
    public function tambah_aksi()
    {
        $nama  = $this->input->post('nama');
        $fungsi  = $this->input->post('fungsi');
        $tanggal = $this->input->post('tanggal');
        $kecamatan = $this->input->post('kecamatan');
        $harga= $this->input->post('harga');
        $alamat= $this->input->post('alamat');
        $foto=$_FILES['foto'];
        if($foto=''){}
        else
        {
            $config['upload_path']      = './assets/foto_spektisida';
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
            'nama_racun'      => $nama,
            'fungsi'      => $fungsi,
            'tanggal'      => $tanggal,
            'kecamatan'      => $kecamatan,
            'harga_racun'      => $harga,
            'alamat'      => $alamat,
            'foto'          =>$foto,
        );

        $this->m_rw->input_data($data);
        redirect('/Rw/informasi_racun');
    }

   public function hapus($id)
   {
       $id = $this->uri->segment(4);
       $this->m_rw->hapus_data($id);
       redirect('rw/informasi_racun');
      // $where = array ('$id' => $id);
      // $this->m_rw->hapus_data($where, 'jenis_racun');
   }
   public function edit($id)
   {
       $where = array('id' =>$id);
       $data['racun'] = $this->m_rw->edit_data($where,'jenis_racun')->result();
       $this->load->view('partials/partial_rw_header',array('title' => 'Edit RACUN'));
       $this->load->view('partials/partial_rw_navbar');
       $this->load->view('rw/view_editracun', $data);
       $this->load->view('partials/partial_rw_footer');
   }

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

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_racun');
        $harga = $this->input->post('harga_racun');
        $alamat = $this->input->post('alamat');

        $data = array(

            'nama_racun' => $nama,
            'harga_racun' => $harga,
            'alamat' => $alamat
        );
        $where = array(
            'id' => $id
        );
        $this->m_rw->update_data($where, $data,'jenis_racun');
        redirect('rw/informasi_racun');
    }

    public function cari()
    {
        $keyword = $this->input->post('keyword');
        $data['cari']= $this->m_rw->cari_data($keyword);
        redirect('/rw/informasi_racun', $data);
    }

    //batasssssss

}
