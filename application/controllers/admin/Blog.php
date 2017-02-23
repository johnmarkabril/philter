<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Blog";
        $this->load->model('Blog_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_blog'			=>	$this->Blog_model->get_all_blog(),
				'specificBlog'			=>	$this->Blog_model->get_latest_blog()
			);
			$data['content']	=	$this->load->view('admin/blog', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content_admin', $data);
		} else {
			redirect('/');
		}
	}

	public function post($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_blog'			=>	$this->Blog_model->get_all_blog(),
				'specificBlog'			=>	$this->Blog_model->get_specific_blog($no)
			);
			$data['content']	=	$this->load->view('admin/blog', $details, TRUE);
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
            $this->Blog_model->updateBlog($params, $no);
            redirect('/');
		} else {
			redirect('/');
		}
	}

	public function createNewBlog()
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
            	'TITLE'			=>	$_POST['admin_blogtitle'],
            	'DESCRIPTION'	=>	$_POST['admin_blogdescription'],
            	'IMAGEURL'		=>	$image_name,
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->Blog_model->insert_blog($params);
            redirect('/');

		} else {
			redirect('/');
		}
	}

	public function updateBlog()
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
            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            	'TITLE'			=>	$_POST['admin_blogtitle'],
            	'DESCRIPTION'	=>	$_POST['admin_blogdescription'],
            	'IMAGEURL'		=>	$image_name,
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->Blog_model->updateBlog($params, $_POST['admin_blogno']);
            redirect('/');

		} else {
			redirect('/');
		}
	}
}