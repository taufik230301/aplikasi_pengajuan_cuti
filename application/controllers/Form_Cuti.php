<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Cuti extends CI_Controller {
	
	public function view_pegawai()
	{
		$this->load->view('pegawai/form_pengajuan_cuti');
    }
    
}