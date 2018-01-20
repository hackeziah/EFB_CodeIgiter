<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll_con extends CI_Controller {

	
	public function index()
	{
	
		$this->load->view('form/sidebar');
	} 
	public function payform ()
	{
	$this->load->view('form/sidebar');	
	$this->load->view('payroll/payform');
	
   }
   public function register()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('payroll/register');
   
  }
  public function task()
  {
  
  $this->load->view('form/sidebar');	
  $this->load->view('payroll/task');
  
 }


 

	
}