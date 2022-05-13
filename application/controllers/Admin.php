<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function view_super_admin()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

        $this->load->view('super_admin/admin');
        
        }else{

            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');

        }
        
    }
    
		
    
}