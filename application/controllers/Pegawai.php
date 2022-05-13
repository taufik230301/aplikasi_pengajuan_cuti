<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}
    public function view_super_admin()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['pegawai'] = $this->m_user->get_all_pegawai()->result_array();
		$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();
		$this->load->view('super_admin/pegawai', $data);
		
	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}

    }
    
	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			
			$data['pegawai'] = $this->m_user->get_all_pegawai()->result_array();
			$this->load->view('admin/pegawai', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}
	}
	
    
}