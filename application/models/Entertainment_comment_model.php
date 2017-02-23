<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Entertainment_comment_model extends CI_Model
{
	public $table 				=	"entertainment_comment";
	public $deletion			=	"DELETION";
	public $dbno				=	"NO";
	public $entertainmentno		=	"ENTERTAINMENTNO";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_specific_comment($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->entertainmentno, $no)
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function insert_comment($params)
	{
        $this->db->insert($this->table, $params);
	}
}