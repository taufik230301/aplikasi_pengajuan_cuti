<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Cuti extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_cuti');
	}
	public function view_pegawai()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$this->load->view('pegawai/form_pengajuan_cuti');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

	}
	
	public function proses_cuti()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$id_user = $this->input->post("id_user");
		$alasan = $this->input->post("alasan");
		$mulai = $this->input->post("mulai");
		$berakhir = $this->input->post("berakhir");
		$id_cuti = md5($id_user.$alasan.$mulai);
		
		$id_status_cuti = 1;

		$hasil = $this->m_cuti->insert_data_cuti('cuti-'.substr($id_cuti, 0, 5),$id_user, $alasan, $mulai, $berakhir, $id_status_cuti);

		if($hasil==false){
			$this->session->set_flashdata('eror_input','eror_input');
		
		}else{
			$this->session->set_flashdata('input','input');
		}
		redirect('Form_Cuti/view_pegawai');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}

	}
    
}