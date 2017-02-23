<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Signup";
    }

	public function index()
	{
		if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
			$details = array (

			);
			$data['content']	=	$this->load->view('signup', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/admin');
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
            	'FIRSTNAME'		=>	$_POST['fname'],
            	'MIDDLEINI'		=>	$_POST['mini'],
            	'LASTNAME'		=>	$_POST['lname'],
            	'EMAILADDRESS'	=>	$_POST['emailadd'],
            	'USERNAME'		=>	$_POST['uname'],
            	'PASSWORD'		=>	md5($_POST['password']),
            	'PERMISSION'	=>	'',
            	'ABOUT'			=>	'',
            	'POSITION'		=>	'User',
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'IMAGEURL'		=>	$image_name,
            	'DELETION'		=>	'0'
            );

            $this->Users_model->insert($params);
            redirect('/');

		} else {
			redirect('/');
		}
	}
}