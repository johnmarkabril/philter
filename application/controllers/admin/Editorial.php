<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Editorial";
        $this->load->model('Editorial_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_editorial'				=>	$this->Editorial_model->get_all_editorial(),
				'get_specific_editorial'		=>	$this->Editorial_model->get_latest_editorial()
			);
			$data['content']	=	$this->load->view('admin/editorial', $details, TRUE);
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
            $this->Editorial_model->updateBlog($params, $no);
            redirect('/admin/editorial');
		} else {
			redirect('/');
		}
	}

	public function post($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_editorial'				=>	$this->Editorial_model->get_all_editorial(),
				'get_specific_editorial'		=>	$this->Editorial_model->get_specific_editorial_no($no)
			);
			$data['content']	=	$this->load->view('admin/editorial', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content_admin', $data);
		} else {
			redirect('/');
		}
	}

	public function createNewEditorial()
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
            	'AUTHOR'		=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            	'TITLE'			=>	$_POST['title'],
            	'DESCRIPTION'	=>	$_POST['description'],
            	'HASHEDITORIAL' =>	md5($this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME." ".$_POST['title']." ".$_POST['description']." ".$date." ".$hour),
            	'IMAGEURL'		=>	$image_name,
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->Editorial_model->insert_editorial($params);
            redirect('/admin/editorial');

		} else {
			redirect('/');
		}
	}

	public function updateEditorial()
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
	            	'AUTHOR'		=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
	            	'TITLE'			=>	$_POST['title'],
	            	'DESCRIPTION'	=>	$_POST['description'],
	            	'IMAGEURL'		=>	$image_name,
	            	'DELETION'		=>	'0'
	            );
        	} else{
        		$image_name = "";

	            $params = array (
	            	'AUTHOR'		=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
	            	'TITLE'			=>	$_POST['title'],
	            	'DESCRIPTION'	=>	$_POST['description'],
	            	'DELETION'		=>	'0'
	            );
        	}

            $this->Editorial_model->updateBlog($params, $_POST['speno']);
            redirect('/admin/editorial');

		} else {
			redirect('/');
		}
	}

}