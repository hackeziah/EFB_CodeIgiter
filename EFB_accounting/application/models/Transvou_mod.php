<?php
 class Transvou_mod extends CI_Model
 {
	
	
	
	 public function __construct(){
	
		parent::__construct();
		//$this->load->database(); 
		
		 }
		 
	 public function getEmployee()
	 {
        return $this->db->get('tbl_employee')->result(); 	
	 }
	 	 

    // $voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by
     
	  public function add($voucher_name,$date,$debit_account,$credit_account,$amount,$narration,$authorize_by,$prepared_by)
	 {
    
      $this->db->set('voucher_name',$voucher_name);
	  $this->db->set('date',$date);
      $this->db->set('debit_account',$debit_account);
      $this->db->set('credit_account',$credit_account);
      $this->db->set('amount',$amount);
      $this->db->set('narration',$narration);
     
      $this->db->set('authorize_by',$authorize_by);
      $this->db->set('prepared_by',$prepared_by); 
      $this->db->insert('tbl_trans'); 
	 }

 
	
	   
	 }

?>