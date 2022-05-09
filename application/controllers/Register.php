<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
    }

    public function proses()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $email = $this->input->post("email");
        $re_password = $this->input->post("re_password");

        echo var_dump($re_password);
        die();
    }
}