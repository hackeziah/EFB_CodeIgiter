<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credvou_con extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this->load->model('Emp_mod');
		$this->load->model('Credvou_mod');
	
	}
	public function index()
	{
	//	$this->load->helper('url');

	//	$this->load->helper('url')showAllCred';
	//	$data['listCred']=$this->Credvou_mod->getCred();
	 
		$data['listCred']=$this->Credvou_mod->getCred();
	
		$this->load->view('form/sidebar');
	
		
		$this->load->view('voucher/credvou',$data);
	
	} 

	public function showAllCred(){
		$result = $this->Credvou_mod->showAllCred();
		echo json_encode($result);
	}
	public function editCredvou(){
		$result = $this->Credvou_mod->editCredvou();
		echo json_encode($result);
	}

	public function updateCredvou(){
		$voucher_name = $this->input->post('voucher_name');
		$date = $this->input->post('date');
		$credit_account = $this->input->post('credit_account');
		$sno = $this->input->post('sno');
		$code = $this->input->post('code');
		$name_of_ac = $this->input->post('name_of_ac');
		$amount = $this->input->post('amount');
		$narration = $this->input->post('narration');
		$total = $this->input->post('total');
		$authorize_by = $this->input->post('authorize_by');
		$prepared_by= $this->input->post('prepared_by');
		//$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by);
		$this->Credvou_mod->updateCredvou($voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by);
//return redirect ('Credvou_con');
	
	}

	public function deleteCredvou(){
		$result = $this->Credvou_mod->deleteCredvou();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function addcred()
	{

		$voucher_names= $this->input->post('voucher_names');
		$dates= $this->input->post('dates');
		$credit_accounts = $this->input->post('credit_accounts');
		$snos = $this->input->post('snos');
		$codes = $this->input->post('codes');
		$name_of_acs = $this->input->post('name_of_acs');
        $amounts = $this->input->post('amounts');
        $narrations = $this->input->post('narrations');
		$totals = $this->input->post('totals');
		$authorize_bys = $this->input->post('authorize_bys');
        $prepared_bys= $this->input->post('prepared_bys');

		$this->Credvou_mod->add($voucher_names,$dates,$credit_accounts,$snos,$codes,$name_of_acs,$amounts,$narrations,$totals,$authorize_bys,$prepared_bys);
		return redirect ('Credvou_con');
		
	   // $this->load->view('form/sidebar');
		//$this->load->view('employee/addemp');
   }
  /*  public function attendance()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('employee/attendance');
   
  }
 */ 
  ///>>>>sample<<<<<

  /* 
  public function delete($emp_no)
  {
	  $this->Credvou_mod->delete($emp_no);
	   return redirect ('Credvou_con');
  }
  */
  
  	 
	
/*

public function editCred($voucher_name)
	{
		$data['data']=$this->Credvou_mod->edit($voucher_name);
		return $this->load->view('test',$data);

	}	 
	public function cred_edit(){
		$voucher_name= $this->input->post('voucher_name');
		$date= $this->input->post('date');
		$credit_account = $this->input->post('credit_account');
		$sno = $this->input->post('sno');
		$code = $this->input->post('code');
		$name_of_ac = $this->input->post('name_of_ac');
		$amount = $this->input->post('amount');
		$narration = $this->input->post('narration');
		$total = $this->input->post('total');
		$authorize_by = $this->input->post('authorize_by');
		$prepared_by= $this->input->post('prepared_by');
		$this->Credvou_mod->edit_cred($voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by);
		return redirect ('Credvou_con');
		//$this->load->view('register');
   }
  public function edit($voucher_name)
  {
	$this->load->view('form/sidebar');
	//$this->load->view('voucher/credvou');
	$foo['data']=$this->Credvou_mod->edit($voucher_name);
	 // $this->load->view('Credvou_con');
	  return redirect('Credvou_con',$foo);

  }
	 
 
  public function edit_cred(){
	
			$voucher_name= $this->input->post('voucher_name');
			$date= $this->input->post('date');
			$credit_account = $this->input->post('credit_account');
			$sno = $this->input->post('sno');
			$code = $this->input->post('code');
			$name_of_ac = $this->input->post('name_of_ac');
			//$amount = $this->input->post('amount');
			$narration = $this->input->post('narration');
			$total = $this->input->post('total');
			$authorize_by = $this->input->post('authorize_by');
			$prepared_by= $this->input->post('prepared_by');
	
	   $this->Credvou_mod->edit_cred($voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$narration,$total,$authorize_by,$prepared_by);
	   return redirect ('Credvou_con');	 
	     //$this->load->view('register');
  }
  */
  

}