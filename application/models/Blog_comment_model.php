<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_comment_model extends CI_Model
{
	public $table 			=	"blog_comment";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";
	public $noblog			=	"BLOGNO";

	function __construct()
	{
		parent::__construct();
	}

	function get_specific_comment_blog($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->noblog, $no)
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function insert_comment($params)
	{
        $this->db->insert($this->table, $params);
	}


}