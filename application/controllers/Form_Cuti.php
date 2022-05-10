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

		$this->load->view('pegawai/form_pengajuan_cuti');

	}
	
	public function proses_cuti()
	{
		$alasan = $this->input->post("alasan");
		$mulai = $this->input->post("mulai");
		$berakhir = $this->input->post("berakhir");


	}
    
}