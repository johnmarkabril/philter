<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "News";
        $this->load->model('News_model');
    }


	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_news'						=>	$this->News_model->get_all_news(),
				'get_specific_news'					=>	$this->News_model->get_latest_news_specific()
			);
			$data['content']	=	$this->load->view('admin/news', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content_admin', $data);
		} else {
			redirect('/');
		}
	}

	public function delete($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$params = array (
	           	'DELETION'		=>	'1'
	        );
            $this->News_model->update($params, $no);
            redirect('/admin/news');
		} else {
			redirect('/');
		}
	}

	public function post($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_news'					=>	$this->News_model->get_all_news(),
				'get_specific_news'				=>	$this->News_model->get_specific_news($no)
			);
			$data['content']	=	$this->load->view('admin/news', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content_admin', $data);
		} else {
			redirect('/');
		}
	}

	public function insert()
	{

		if ( isset ( $_POST['submit'] ) ) {

	    	date_default_timezone_set("Asia/Manila");
	    	$date = date("F d, Y");
	    	$time = date("g:i A");
        	$loc = $_SERVER['DOCUMENT_ROOT'].base_url()."public/img/";

        	if ( !empty(addslashes($_FILES['image']['name'])) ){
           		$image_name = addslashes($_FILES['image']['name']);
            	move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);
        	} else{
        		$image_name = "";
        	}

            $params = array (
            	'NO'			=>	'',
            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            	'TITLE'			=>	$_POST['title'],
            	'URL'			=>	$_POST['websitelink'],
            	'CATEGORY'		=>	$_POST['categories'],
            	'IMAGEURL'		=>	$image_name,
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->News_model->insert($params);
            redirect('/admin/news');

		} else {
			redirect('/');
		}
	}

	public function update()
	{

		if ( isset ( $_POST['submit'] ) ) {

	    	date_default_timezone_set("Asia/Manila");
	    	$date = date("F d, Y");
	    	$time = date("g:i A");
        	$loc = $_SERVER['DOCUMENT_ROOT'].base_url()."public/img/";

        	if ( !empty(addslashes($_FILES['image']['name'])) ){
           		$image_name = addslashes($_FILES['image']['name']);
            	move_uploaded_file($_FILES['image']['tmp_name'], $loc . $_FILES['image']['name']);

	            $params = array (
	            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            		'TITLE'			=>	$_POST['title'],
            		'URL'			=>	$_POST['websitelink'],
            		'CATEGORY'		=>	$_POST['categories'],
	            	'IMAGEURL'		=>	$image_name,
	            	'DELETION'		=>	'0'
	            );
        	} else{
        		$image_name = "";

	            $params = array (
	            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            		'TITLE'			=>	$_POST['title'],
            		'URL'			=>	$_POST['websitelink'],
            		'CATEGORY'		=>	$_POST['categories'],
	            	'DELETION'		=>	'0'
	            );
        	}

            $this->News_model->update($params, $_POST['speno']);
            redirect('/admin/news');

		} else {
			redirect('/');
		}
	}

}