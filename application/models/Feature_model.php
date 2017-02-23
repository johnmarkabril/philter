<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Feature_model extends CI_Model
{
	public $table 			=	"feature";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_feature()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function get_specific_feature($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function get_latest_feature()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(1)
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
}