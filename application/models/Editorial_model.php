<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editorial_model extends CI_Model
{
	public $table 			=	"editorial";
	public $deletion		=	"DELETION";
	public $hasheditorialdb	=	"HASHEDITORIAL";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_editorial()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function get_latest_editorial()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function get_specific_editorial($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function get_specific_editorial_no($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function insert_editorial($params)
	{
        $this->db->insert($this->table, $params);
	}
	
	function updateBlog($params, $no)
	{
        $this->db->where($this->dbno, $no);	
        $this->db->update($this->table, $params); 
   	}
}