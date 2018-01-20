<?php
 class Emp_mod extends CI_Model
 {
	
	
	 public function __construct(){
	
		parent::__construct();
		//$this->load->database(); 
		
		 }
		 
	 public function getEmployee()
	 {
        return $this->db->get('tbl_employee')->result(); 	
	 }
	 	 

	  public function add($first_name,$last_name,$user_name,$email,$gender,$birthday,$address)
	 {
    
	  $this->db->set('first_name',$first_name);
	  $this->db->set('last_name',$last_name);
      $this->db->set('user_name',$user_name);
      $this->db->set('email',$email);
      $this->db->set('gender',$gender);
      $this->db->set('birthday',$birthday);
      $this->db->set('address',$address);
      $this->db->insert('tbl_employee'); 
	 }

 
	
	   
	 }

?>