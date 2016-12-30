<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stories_model extends CI_Model
{
	public $table 			=	"stories";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
	}

	function get_stories_new()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(15)
						->get($this->table);

				return $row->result();
	}
}