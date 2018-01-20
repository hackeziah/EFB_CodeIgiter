<?php
 class Credvou_mod extends CI_Model
 {
	
	
	 public function __construct(){
	
		parent::__construct();
		//$this->load->database(); 
		
		 }
		 public function getCred()
		 {

			
			return $this->db->get('tbl_credvou')->result(); 	
		 }
		 public function showAllCred(){
			//$this->db->order_by('created_at', 'desc');
			$query = $this->db->get('tbl_credvou');
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}
		
		 public function editCredvou(){
			$voucher_name = $this->input->get('voucher_name');
			$this->db->where('voucher_name', $voucher_name);
			
			$query = $this->db->get('tbl_credvou');
			if($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

	//	$voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by
		public function updateCredvou($voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by){
			//$id = $this->input->post('txtId');
		//	$voucher_name= $this->input->post('voucher_name');
		//$voucher_name=$this->input->post('voucher_name');
			/*$field = array(
		//	'id '=>$this->input->post('txtId')
			'voucher_name'=>$this->input->post('voucher_name'),
			'date'=>$this->input->post('date'),
			'credit_account'=>$this->input->post('credit_account'),
			'sno'=>$this->input->post('sno'),
			'code'=>$this->input->post('code'),
			'name_of_ac'=>$this->input->post('name_of_ac'),
			'amount'=>$this->input->post('amount'),
			'narration'=>$this->input->post('narration'),
			'total'=>$this->input->post('total'),
			'authorize_by'=>$this->input->post('authorize_by'),
			'prepared_by'=>$this->input->post('prepared_by')
			);
			*/
			//$this->db->where('voucher_name',$voucher_name);
			$this->db->set('voucher_name',$voucher_name);
			$this->db->set('date',$date);
			$this->db->set('credit_account',$credit_account);
			$this->db->set('sno',$sno);
			$this->db->set('code',$code);
			$this->db->set('name_of_ac', $name_of_ac);
			$this->db->set('amount',$amount);
			$this->db->set('narration',$narration);
			$this->db->set('total',$sno);
			$this->db->set('authorize_by',$authorize_by);
			$this->db->set('prepared_by', $prepared_by);
		    $this->db->update('tbl_credvou'); 
			$this->db->where('voucher_name', $voucher_name);

			//$this->db->update('tbl_credvou', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
		public function edit($voucher_name)
		{
		   $this->db->where('voucher_name',$voucher_name);
		   return  $this->db->get('tbl_credvou')->row(); 
		  
		}
		

		
		function deleteCredvou(){
			$voucher_name = $this->input->get('voucher_name');
			$this->db->where('voucher_name', $voucher_name);
			$this->db->delete('tbl_credvou');
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
	
    // $voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by
     
	  public function add($voucher_names,$dates,$credit_accounts,$snos,$codes,$name_of_acs,$amounts,$narrations,$totals,$authorize_bys,$prepared_bys)
	 {
    
      $this->db->set('voucher_name',$voucher_names);
	  $this->db->set('date',$dates);
	  $this->db->set('credit_account',$credit_accounts);
      $this->db->set('sno',$snos);
	  $this->db->set('code',$codes); 
      $this->db->set('name_of_ac',$name_of_acs);
      $this->db->set('amount',$amounts);
      $this->db->set('narration',$narrations);
      $this->db->set('total',$totals); 
      $this->db->set('authorize_by',$authorize_bys);
      $this->db->set('prepared_by',$prepared_bys); 
      $this->db->insert('tbl_credvou'); 
	 }
	 
/*
	
	   public function edit_cred($voucher_name,$date,$credit_account,$sno,$code,$name_of_ac,$amount,$narration,$total,$authorize_by,$prepared_by)	 
	 {
		$this->db->where('voucher_name',$voucher_name);
		$this->db->set('date',$date);
		$this->db->set('credit_account',$credit_account);
		$this->db->set('sno',$sno);
		$this->db->set('code',$code);
		$this->db->set('name_of_ac',$name_of_ac);
		$this->db->set('amount',$amount);
		$this->db->set('narration',$narration);
		$this->db->set('total',$total); 
		$this->db->set('authorize_by',$authorize_by);
		$this->db->set('prepared_by',$prepared_by); 
      	$this->db->update('tbl_credvou'); 
	 }

*/
	}

?>