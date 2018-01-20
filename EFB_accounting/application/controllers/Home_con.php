<?php/*

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_con extends CI_Controller {


	public function index()
	{
	//	$this->load->helper('url');
		
	    $data['listEmp']=$this->Employee_mod->getEmployee();
		$this->load->view('sample/register',$data);
	}
	
 

    public function add(){
		$this->load->view('sample/add');
		
		} 
	public function emp_add(){
	
		 $first_name = $this->input->post('first_name');
		 $last_name = $this->input->post('last_name');
		 $this->Employee_mod->add($first_name,$last_name);
		 return redirect ('Home_con');
		 //$this->load->view('register');
	}

	public function delete ($emp_no)
	{
		$this->Employee_mod->delete($emp_no);
		 return redirect ('Home_con');
	}	 
	public function edit($emp_no)
	{
		$data['data']=$this->Employee_mod->edit($emp_no);
		return $this->load->view('sample/edit',$data);
	}	 
	
	public function emp_edit(){
		 $emp_no = $this->input->post('emp_no');
		 $first_name = $this->input->post('first_name');
		 $last_name = $this->input->post('last_name');
		 $middle_name = $this->input->post('middle_name');
		 $phone = $this->input->post('phone');
		 $this->Employee_mod->emp_edit($emp_no, $first_name,$last_name, $middle_name, $phone);
		 return redirect ('Home_con');
		 //$this->load->view('register');
	}

} 
*/


