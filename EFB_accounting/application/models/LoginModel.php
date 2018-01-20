<?php
class LoginModel extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
        
	function login($username,$password)
	{
		$this -> db->select(' * ');
		$this -> db->from('tb_user');
		$this -> db->where('username', $username);
		$this -> db->where('password', $password);
		$this -> db->limit(1);
		$query = $this->db-> get();
		return $query;
	}
}