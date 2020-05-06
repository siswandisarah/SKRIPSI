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

        $this->load->view('partials/partial_rw_header',array('title' => 'Informasi Pertanian'));
    		$this->load->view('partials/partial_rw_navbar');
	      $this->load->view('rw/view_hasilpanen',$data);
        $this->load->view('partials/partial_rw_footer');
    }
    public function tambah_aksi2()
    {
        $nama= $this->input->post('nama_petani');
        $jenis= $this->input->post('jenis_kelamin');
        $tanggal= $this->input->post('tanggal');
        $jenis_beras= $this->input->post('jenis_beras');
        $harga= $this->input->post('harga');
        $kecamatan= $this->input->post('kecamatan');
        $kelurahan= $this->input->post('kelurahan');
        $alamat= $this->input->post('alamat');
        $jumlah= $this->input->post('jumlah');
        $longitude= $this->input->post('longitude');
        $latitude= $this->input->post('latitude');

        $data = array(
            'nama_petani'     => $nama,
            'jenis_kelamin'   => $jenis,
            'tgl_panen'       => $tanggal,
            'nama_beras'      => $jenis_beras,
            'harga'           => $harga,
            'kecamatan'       => $kecamatan,
            'kelurahan'       => $kelurahan,
            'alamat'          => $alamat,
            'jumlah'          => $jumlah,
            'longitude'          => $longitude,
            'latitude'          => $latitude,
        );

        $this->m_rw->input_data2($data);
        redirect('/Rw/informasi_pertanian');


    }
    public function hapus($id)
    {
        $id = $this->uri->segment(4);
        $this->m_rw->hapus_data2($id);
        redirect('rw/informasi_pertanian');
    }

    public function edit($id)
    {
        $where = array('id' =>$id);
        $data['hasil'] = $this->m_rw->edit_data1($where,'jenis_beras')->result();
        $this->load->view('partials/partial_rw_header',array('title' => 'Edit Pertanian'));
         $this->load->view('partials/partial_rw_navbar');
        $this->load->view('rw/view_editpertanian', $data);
        $this->load->view('partials/partial_rw_footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_petani');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tanggal = $this->input->post('tgl_panen');
        $beras = $this->input->post('nama_beras');
        $harga = $this->input->post('harga');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $alamat = $this->input->post('alamat');
        $jumlah = $this->input->post('jumlah');
        $longitude= $this->input->post('longitude');
        $latitude= $this->input->post('latitude');


        $data = array(

            'nama_petani' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_panen' => $tanggal,
            'nama_beras' => $beras,
            'harga' => $harga,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'alamat' => $alamat,
            'jumlah' => $jumlah,
            'longitude'          => $longitude,
            'latitude'          => $latitude
        );
        $where = array(
            'id' => $id
        );
        $this->m_rw->update_data1($where, $data,'jenis_beras');
        redirect('rw/informasi_pertanian');
    }

}
