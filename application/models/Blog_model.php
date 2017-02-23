<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	public $table 			=	"blog";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
	}

	function get_all_blog()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function get_latest_blog_three()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(3)
						->get($this->table);

				return $row->result();
	}

	function get_latest_blog()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function get_specific_blog($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->limit(1)
						->get($this->table);

				return $row->result();
	}

	function insert_blog($params)
	{
        $this->db->insert($this->table, $params);
	}

	function updateBlog($params, $no)
	{
        $this->db->where($this->dbno, $no);	
        $this->db->update($this->table, $params); 
   	}

}