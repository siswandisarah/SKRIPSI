<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('email'))
		{
			redirect('login/');
		}
        $this->load->model('M_rw');

    }


	public function Pengguna_Aplikasi()
	{
		$data['pengguna']= $this->M_rw->tampilkan3();
		$this->load->view('partials2/partial_admin_header',array('title' => 'Daftar Pengguna Aplikasi'));
		$this->load->view('partials2/partial_admin_navbar');
		$this->load->view('admin/view_daftar_pengguna',$data);
		$this->load->view('partials2/partial_admin_footer');
	}

	public function hapus($id)
   {
       $id = $this->uri->segment(4);
       $this->m_rw->hapus_pengguna($id);
       redirect('admin/user/pengguna_aplikasi');
      // $where = array ('$id' => $id);
      // $this->m_rw->hapus_data($where, 'jenis_racun');
   }


	public function changepassword()
	{
	  	$data['user'] = $this->db->get_where('user', ['email'=>
		$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

		if($this->form_validation->run() == false){
		$this->load->view('partials2/partial_admin_header',array('title' => 'Change Password'));
		$this->load->view('partials2/partial_admin_navbar');
		$this->load->view('admin/view_changepassword',$data);
		$this->load->view('partials2/partial_admin_footer');
		}else{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password,$data['user']['password'])){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Password yang anda masukan adalah password yang salah!!
				</div>');
				redirect('admin/user/changepassword');
			}else{
				if($current_password==$new_password){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password yang baru tidak boleh sama dengan password lama
					</div>');
					redirect('admin/user/changepassword');
				}else{
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
					
					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Password telah di ubah!!
					</div>');
					redirect('admin/user/changepassword');
				}
			}
		}
	}


}
