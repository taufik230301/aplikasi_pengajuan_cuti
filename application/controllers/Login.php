<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->m_user->cek_login($username);

		if($user->num_rows()>0){
			$user = $user->row_array();

			if($user['password'] == $password){

				if($user['id_user_level'] == 1){

					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id', $user['id']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
					
					redirect('Dashboard/dashboard_pegawai');
	
				}else if($user['id_user_level'] == 2){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id', $user['id']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/dashboard_admin');
	
				}else if($user['id_user_level'] == 3){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id', $user['id']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/dashboard_super_admin');
	
				}else{
					$this->session->set_flashdata('loggin_err','loggin_err');
					redirect('Login/index');
				}

			}else{

			$this->session->set_flashdata('loggin_err_pass','loggin_err_pass');
			redirect('Login/index');

			}
		}else{
			$this->session->set_flashdata('loggin_err_no_user','loggin_err_no_user');
			redirect('Login/index');
		}
		
	}
}