<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false)
		{
		$this->load->view('login/view_login');
		}else{
			//kalo depe validasi so jadi
			$this->_login();
		}
	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password= $this->input->post('password');


		$user =$this->db->get_where('user', ['email'=> $email])->row_array();
		//jika usernya ada
		if($user)
		{
			//jika usernya aktif
			if($user['is_active'] == 1)
			{
				if(password_verify($password, $user['password']))
				{
					$data =[
						'email'=> $user ['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id']== 1)
					{
						redirect('Admin/home');
					}else{
						redirect('Rw/home');
					}


				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Password yang anda masukan salah !!
					</div>');
					redirect('login/');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			email ini belum di aktivasi
			</div>');
			redirect('login/');
			}

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			email yang anda masukan belum terdaftar dalam sistem!! silakan lakukan registrasi!!
			</div>');
			redirect('login/');
		}
	}


}
