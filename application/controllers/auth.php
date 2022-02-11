<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('authmodel');
    }
    
	public function login()
	{
        $output = $this->authmodel->do_login();
		$this->load->view('auth/login',['output'=>$output]);
	}
    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
