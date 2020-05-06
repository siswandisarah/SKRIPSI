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

        $this->load->view('partials/partial_rw_header',array('title' => 'Informasi Pupuk'));
    		$this->load->view('partials/partial_rw_navbar');
	      $this->load->view('rw/view_pupukRw',$data);
        $this->load->view('partials/partial_rw_footer');
    }
   ///fungsi ini adalah untuk memasukan data dedalam database
    public function tambah_aksi_pupuk()
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
            $config['upload_path']      = './assets/foto_pupuk';
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
            'nama_pupuk'      => $nama,
            'fungsi'      => $fungsi,
            'tanggal'      => $tanggal,
            'kecamatan'      => $kecamatan,
            'harga_pupuk'      => $harga,
            'alamat'      => $alamat,
            'foto'          =>$foto,
        );

        $this->m_rw->input_data_pupuk($data);
        redirect('/Rw/informasi_pupuk');
    }

   public function hapus_pupuk($id)
   {
       $id = $this->uri->segment(4);
       $this->m_rw->hapus_data_pupuk($id);
       redirect('/rw/informasi_pupuk');
      // $where = array ('$id' => $id);
      // $this->m_rw->hapus_data($where, 'jenis_racun');
   }


   public function edit($id)
   {
      $where = array('id' =>$id);
      $data['pupuk'] = $this->m_rw->edit_data2($where,'jenis_pupuk')->result();
      $this->load->view('partials/partial_rw_header',array('title' => 'Edit Pupuk'));
      $this->load->view('partials/partial_rw_navbar');
      $this->load->view('rw/view_editpupuk', $data);
      $this->load->view('partials/partial_rw_footer');
   }

   public function update()
   {
       $id = $this->input->post('id');
       $nama = $this->input->post('nama_pupuk');
       $fungsi = $this->input->post('fungsi');
       $tanggal = $this->input->post('tanggal');
       $kecamatan = $this->input->post('kecamatan');
       $harga = $this->input->post('harga_pupuk');
       $alamat = $this->input->post('alamat');

       $data = array(

           'nama_pupuk' => $nama,
           'fungsi' => $fungsi,
           'tanggal' => $tanggal,
           'kecamatan' => $kecamatan,
           'harga_pupuk' => $harga,
           'alamat' => $alamat,

       );
       $where = array(
           'id' => $id
       );
       $this->m_rw->update_data2($where, $data,'jenis_pupuk');
       redirect('rw/informasi_pupuk');
   }

}
