<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debvou_con extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('Emp_mod');
        $this->load->model('Debvou_mod');
    }

	public function index()
	{

		 $this->load->view('form/sidebar');
		$this->load->view('voucher/debvou');
	} 

	public function adddeb()
	{

		$voucher_name= $this->input->post('voucher_name');
		$date= $this->input->post('date');
		$debit_account= $this->input->post('debit_account');
		$sno = $this->input->post('sno');
		$code = $this->input->post('code');
		$name_of_ac = $this->input->post('name_of_ac');
        $amount = $this->input->post('amount');
        $narration = $this->input->post('narration');
		$total = $this->input->post('total');
		$authorize_by = $this->input->post('authorize_by');
        $prepared_by= $this->input->post('prepared_by');

		$this->Debvou_mod->add($voucher_name,$date,$debit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by);
		return redirect ('Debvou_con');
		
	   // $this->load->view('form/sidebar');
		//$this->load->view('employee/addemp');
   }
   public function attendance()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('employee/attendance');
   
  }

  
	
}