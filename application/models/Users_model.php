<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public $table 			=	"user";
	public $email 			=	"EMAILADDRESS";
	public $password		=	"PASSWORD";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
	}

	function check_email_pass($email, $password){
		$row = 	$this->db->where($this->email, $email)
				 		 ->where($this->password, $password)
				 		 ->where($this->deletion, '0')
				  		 ->limit(1)
				 		 ->get($this->table);

		return $row->row();
	}

	function get_all_user()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function insert($params)
	{
        $this->db->insert($this->table, $params);
	}
	
	function update($params, $no)
	{
        $this->db->where($this->dbno, $no);	
        $this->db->update($this->table, $params); 
   	}

	function get_latest_user_specific()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function get_specific_user($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

				return $row->result();
	}
}