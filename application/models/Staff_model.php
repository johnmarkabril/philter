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
						->get($this->table);

				return $row->result();
	}

	function insert_staff($params)
	{
        $this->db->insert($this->table, $params);
	}

	function update_staff($params, $no)
	{
        $this->db->where($this->dbno, $no)
                 ->update($this->table, $params);
	}
}