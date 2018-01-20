<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_con extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Emp_mod');
    }

	public function index()
	{
	
		//$data['listEmp']=$this->Employee_mod->getEmployee();
		
		//$this->load->view('form/sidebar');
		//$this->load->view('employee/addemp',$data);
		 $this->load->view('form/sidebar');
		$this->load->view('employee/addemp');
	} 
	public function addemp()
	{

		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$user_name = $this->input->post('user_name');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$birthday = $this->input->post('birthday');
		$address = $this->input->post('address');
		$this->Emp_mod->add($first_name,$last_name,$user_name,$email,$gender,$birthday,$address);
		return redirect ('Employee_con');
		
	   // $this->load->view('form/sidebar');
		//$this->load->view('employee/addemp');
   }
   public function attendance()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('employee/attendance');
   
  }

  
	
}