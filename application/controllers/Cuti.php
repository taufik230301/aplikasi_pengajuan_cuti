<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

    public function view_super_admin()
	{
		$this->load->view('super_admin/cuti');
    }
    
	public function view_admin()
	{
		$this->load->view('admin/cuti');
	}
	
	public function view_pegawai()
	{
		$this->load->view('pegawai/cuti');
    }
    
}