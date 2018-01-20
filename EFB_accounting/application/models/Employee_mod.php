<?php
 class Employee_mod extends CI_Model
 {
	
	
	 public function __construct(){
	
		parent::__construct();
		//$this->load->database(); 
		 }
		 
	 public function getEmployee()
	 {
        return $this->db->get('tbl_employee')->result(); 	
	 }
	 	 

	  public function add($first_name,$last_name)
	 {
	  $this->db->set('first_name',$first_name);
	  $this->db->set('last_name',$last_name);
	
	  //$this->db->set('phone', $phone);
      $this->db->insert('sample'); 
	 }
	 
	 public function delete($emp_no){
	 $this->db->where('emp_no',$emp_no);
     $this->db->delete('tbl_employee'); 
	 }
	
  	public function process($emp_no){
  	  $this->db->set('emp_no',$emp_no);
	  $this->db->set('first_name',$first_name);
	  $this->db->set('last_name',$last_name);
	  $this->db->set('middle_name',$middle_name);
	  $this->db->set('phone', $phone);
	  $this->db->insert('tbl_employee');  
		}
	 public function edit($emp_no)
	 {
		$this->db->where('emp_no',$emp_no);
        return  $this->db->get('tbl_employee')->row(); 
       
	 }
	
	   public function emp_edit($emp_no, $first_name,$last_name, $middle_name, $phone)
	 {
	  $this->db->where('emp_no',$emp_no);
      $this->db->set('emp_no',$emp_no);
	  $this->db->set('first_name',$first_name);
	  $this->db->set('last_name',$last_name);
	  $this->db->set('middle_name',$middle_name);
	  $this->db->set('phone', $phone);
      $this->db->update('tbl_employee'); 
	 }
	 }

?>