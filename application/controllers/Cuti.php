<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_cuti');
	}
	

    public function view_super_admin()
	{
		$data['cuti'] = $this->m_cuti->get_all_cuti()->result_array();
		$this->load->view('super_admin/cuti', $data);
    }
    
	public function view_admin()
	{
		$data['cuti'] = $this->m_cuti->get_all_cuti()->result_array();
		$this->load->view('admin/cuti', $data);
	}
	
	public function view_pegawai()
	{
		$this->load->view('pegawai/cuti');
    }
    
}