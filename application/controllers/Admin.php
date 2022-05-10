<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function view_super_admin()
	{
		$this->load->view('super_admin/admin');
    }
    
		
    
}