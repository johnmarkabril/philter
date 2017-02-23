<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "User Management";
        $this->load->model('Users_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_user'					=>	$this->Users_model->get_all_user()
			);
			$data['content']	=	$this->load->view('admin/user_management', $details, TRUE);
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
            	'FIRSTNAME'		=>	$_POST['fname'],
            	'MIDDLEINI'		=>	$_POST['mini'],
            	'LASTNAME'		=>	$_POST['lname'],
            	'EMAILADDRESS'	=>	$_POST['emailaddress'],
            	'USERNAME'		=>	$_POST['username'],
            	'PASSWORD'		=>	md5($_POST['password']),
            	'PERMISSION'	=>	'',
            	'ABOUT'			=>	'',
            	'POSITION'		=>	'Administrator',
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'IMAGEURL'		=>	$image_name,
            	'DELETION'		=>	'0'
            );

            $this->Users_model->insert($params);
            redirect('/admin/user_management');

		} else {
			redirect('/');
		}
	}

	public function delete($no)
	{
		if ( isset ( $_POST['submit'] ) ) {
			$params = array (
	           	'DELETION'		=>	'1'
	        );
            $this->Users_model->update($params, $no);
            redirect('/admin/user_management');
        } else {
			redirect('/');
        }
	}
	
}