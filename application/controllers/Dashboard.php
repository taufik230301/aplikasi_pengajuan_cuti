<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard_super_admin()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		
		$this->load->view('super_admin/dashboard');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}

	public function dashboard_admin()
	{
		$this->load->view('admin/dashboard');
	}
	
	public function dashboard_pegawai()
	{
		$this->load->view('pegawai/dashboard');
    }
    
}