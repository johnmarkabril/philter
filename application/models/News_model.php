<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class News_model extends CI_Model
{
	public $table 			=	"news";
	public $deletion		=	"DELETION";
	public $dbno			=	"NO";
	public $category		=	"CATEGORY";

	function __construct()
	{
		parent::__construct();
	}

	function get_latest_new()
	{
		$row = $this->db->where($this->deletion, "0")
						->order_by($this->dbno, "DESC")
						->limit(3)
						->get($this->table);

				return $row->result();
	}

	function get_news_business()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Business")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_entertainment()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Entertainment")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_globalnation()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Global Nation")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_lifestyle()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Lifestyle")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_news()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "News")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_opinion()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Opinion")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_sports()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Sports")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

	function get_news_technology()
	{
		$row = $this->db->where($this->deletion, "0")
						->where($this->category, "Technology")
						->order_by($this->dbno, "DESC")
						->limit(2)
						->get($this->table);

				return $row->result();
	}

}