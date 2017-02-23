<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editorial_comment_model extends CI_Model
{
	public $table 				=	"editorial_comment";
	public $deletion			=	"DELETION";
	public $dbno				=	"NO";
	public $editorialno 		=	"EDITORIALNO";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_specific_comment($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->editorialno, $no)
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function insert_comment($params)
	{
        $this->db->insert($this->table, $params);
	}
}