<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

	function __construct()
    {
        parent::__construct();				
        $this->load->model('LoginModel','LoginModel');
    }    
	
	public function index()
	{
		if(!empty($_POST))
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->LoginModel->login($username,$password);
            if($result -> num_rows() > 0)
            {
                foreach ($result->result() as $row)
                {
                    $this->session->userid = $row->id;
                    $this->session->username =  $row->username;
                    $this->session->is_admin =  $row->is_admin;
                    redirect('acc_con');
                }
            }
            else
            {
            
                $this->load->view('login');
            }
          
        }
		else
		{
			$this->load->view('login');
		}
	}
	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
