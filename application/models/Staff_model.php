<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Staff_model extends CI_Model
{
	public $table 			=	"staff";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";
	public $lastname		=	"LASTNAME";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_staff()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->lastname, "ASC")
						->get($this->table);

				return $row->result();
	}

}