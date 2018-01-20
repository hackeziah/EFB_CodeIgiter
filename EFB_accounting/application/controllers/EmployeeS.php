<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('employee_m', 'm');
		$this->load->model('Credvou_mod');
	}

	function index(){
		$this->load->view('form/sidebar');
		$this->load->view('employee_ajax/index');
	
	}

	public function showAllCred(){
		$result = $this->Credvou_mod->showAllCred();
		echo json_encode($result);
	}

	public function addEmployee(){
		$result = $this->m->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editCredvou(){
		$result = $this->Credvou_mod->editCredvou();
		echo json_encode($result);
	}
	//editCredvou
	public function updateCredvou(){
		$result = $this->Credvou_mod->updateCredvou();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->m->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}