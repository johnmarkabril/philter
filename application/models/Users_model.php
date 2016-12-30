<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public $table 			=	"online_user";
	public $idnum 			=	"IDNO";
	public $password		=	"PASSWORD";
	public $status			=	"STATUS";

	function __construct()
	{
		parent::__construct();
	}

	function check_idnum_pass($c_idnum, $c_password){
		$row = 	$this->db->where($this->idnum, $c_idnum)
				 		 ->where($this->password, md5($c_password))
				 		 ->where($this->status, 'Registered')
				  		 ->limit(1)
				 		 ->get($this->table);

		if($row->num_rows() > 0){
			return $row->row();
		}else{
			return false;
		}
	}
}