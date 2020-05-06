<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
        ['is_unique' => 'email sudah di gunakan sebelumnya!']
    );

        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]',
        ['metches' => 'anda memasukan password yang salah !!', 'min_length' => 'password harus 6 character !!']
    );
        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[6]|matches[password1]');


        if($this->form_validation->run() == false){
        $this->load->view('login/view_regis');
        }else{
           $data = [
               'name' =>  htmlspecialchars($this->input->post('name',true)),
               'kecamatan' =>  htmlspecialchars($this->input->post('kecamatan',true)),
               'kelurahan' =>  htmlspecialchars($this->input->post('kelurahan',true)),
               'desa' =>  htmlspecialchars($this->input->post('desa',true)),
               'dusun' =>  htmlspecialchars($this->input->post('dusun',true)),
               'email' =>  htmlspecialchars($this->input->post('email',true)),
               'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
               'role_id' => 2,
               'is_active' => 1,
               'date_created' => time()

           ];


            $this->db->insert('user', $data);

           

           $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           selamat anda sudah melakukan registration. silakan Login!!
           </div>');
           redirect('login');
        }
    }
    
  public function logout()
  {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      You have been logged out!! </div>');
      redirect('login/');
  }
}
