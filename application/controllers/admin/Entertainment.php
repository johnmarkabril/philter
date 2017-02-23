<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entertainment extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Entertainment";
        $this->load->model('Entertainment_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_entertainment'				=>	$this->Entertainment_model->get_all_entertainment(),
				'get_specific_entertainment'		=>	$this->Entertainment_model->get_latest_entertainment()
			);
			$data['content']	=	$this->load->view('admin/entertainment', $details, TRUE);
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
            $this->Entertainment_model->update($params, $no);
            redirect('/admin/entertainment');
		} else {
			redirect('/');
		}
	}

	public function post($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_entertainment'				=>	$this->Entertainment_model->get_all_entertainment(),
				'get_specific_entertainment'		=>	$this->Entertainment_model->get_specific_entertainment_no($no)
			);
			$data['content']	=	$this->load->view('admin/entertainment', $details, TRUE);
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
            	'DESCRIPTION'	=>	$_POST['description'],
            	'IMAGEURL'		=>	$image_name,
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->Entertainment_model->insert($params);
            redirect('/admin/entertainment');

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
	            	'DESCRIPTION'	=>	$_POST['description'],
	            	'IMAGEURL'		=>	$image_name,
	            	'DELETION'		=>	'0'
	            );
        	} else{
        		$image_name = "";

	            $params = array (
	            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
	            	'TITLE'			=>	$_POST['title'],
	            	'DESCRIPTION'	=>	$_POST['description'],
	            	'DELETION'		=>	'0'
	            );
        	}

            $this->Entertainment_model->update($params, $_POST['speno']);
            redirect('/admin/entertainment');

		} else {
			redirect('/');
		}
	}

}