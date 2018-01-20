<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transvou_con extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('Emp_mod');
        $this->load->model('Transvou_mod');
    }

	public function index()
	{

		 $this->load->view('form/sidebar');
		$this->load->view('voucher/transV');
	} 

	public function add()
	{

		$voucher_name= $this->input->post('voucher_name');
		$date= $this->input->post('date');
        $credit_account = $this->input->post('credit_account');
        $debit_account = $this->input->post('debit_account');
        $amount = $this->input->post('amount');
        $narration = $this->input->post('narration');
		//$total = $this->input->post('total');
		$authorize_by = $this->input->post('authorize_by');
        $prepared_by= $this->input->post('prepared_by');

		$this->Transvou_mod->add($voucher_name,$date,$credit_account,$debit_account,$amount,$narration,$authorize_by,$prepared_by);
		return redirect ('Transvou_con');
		
	   // $this->load->view('form/sidebar');
		//$this->load->view('employee/addemp');
   }
   public function attendance()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('employee/attendance');
   
  }


	
}