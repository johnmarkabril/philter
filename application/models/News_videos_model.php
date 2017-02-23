<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_videos_model extends CI_Model
{
	public $table 			=	"news_videos";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";

	function __construct()
	{
		parent::__construct();
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

	function get_all_news_videos_limit()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(3)
						->get($this->table);

				return $row->result();
	}

	function get_all_videos()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->get($this->table);

				return $row->result();
	}

	function get_latest_videos()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(1)
						->get($this->table);
						
				return $row->result();
	}

	function get_specific_videos($no)
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->dbno, $no)
						->order_by($this->dbno, "DESC")
						->limit(1)
						->get($this->table);

				return $row->result();
	}


}