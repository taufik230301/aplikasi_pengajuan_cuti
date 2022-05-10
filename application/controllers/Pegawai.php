<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function view_super_admin()
	{
		$this->load->view('super_admin/pegawai');
    }
    
	public function view_admin()
	{
		$this->load->view('admin/pegawai');
	}
	
    
}