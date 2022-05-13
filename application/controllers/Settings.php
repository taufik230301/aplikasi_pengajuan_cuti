<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

    public function view_super_admin()
	{
		$this->load->view('super_admin/settings');
    }
    
	public function view_admin()
	{
		$this->load->view('admin/settings');
	}
	
	public function view_pegawai()
	{
		
		$data['pegawai'] = $this->m_user->get_pegawai_by_id($this->session->userdata('id_user'))->row_array();
		$this->load->view('pegawai/settings', $data);
	}
	
	public function lengkapi_data()
	{
		$id = $this->input->post("id");
		$nama_lengkap = $this->input->post("nama_lengkap");
		$no_telp = $this->input->post("no_telp");
		$alamat = $this->input->post("alamat");

		

		$hasil = $this->m_user->insert_user_detail($id, $nama_lengkap, $no_telp, $alamat);

        if($hasil==false){
            $this->session->set_flashdata('eror','eror');
            redirect('Settings/view_pegawai');
		}else{
			$this->session->set_flashdata('input','input');
			redirect('Settings/view_pegawai');
        }

	}
    
}