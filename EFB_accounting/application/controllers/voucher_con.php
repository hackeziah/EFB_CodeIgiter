<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voucher_con extends CI_Controller {

	
	public function index()
	{
	
        $this->load->view('form/sidebar');
        
	} 
	public function credvou()
	{
	
	$this->load->view('form/sidebar');	
	$this->load->view('voucher/credvou');
	
   }
   public function debvou()
   {
   
   $this->load->view('form/sidebar');	
   $this->load->view('voucher/debvou');
   
  }
 
  public function transV()
  {
  
  $this->load->view('form/sidebar');	
  $this->load->view('voucher/transV');
  
 }
  
	
}