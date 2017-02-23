<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Staff";
        $this->load->model('Staff_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
                'get_all_staff'             =>      $this->Staff_model->get_all_staff()
			);
			$data['content']	=	$this->load->view('admin/staff', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content_admin', $data);
		} else {
			redirect('/');
		}
	}

	public function insertStaff()
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
            	'NO'				=>	'',
            	'FIRSTNAME'			=>	$_POST['fname'],
            	'MIDDLEINI'			=>	$_POST['mini'],
            	'LASTNAME'			=>	$_POST['lname'],
            	'DESCRIPTION'		=>	$_POST['description'],
            	'POSITION'			=>	$_POST['position'],
            	'DATE'				=>	$date,
            	'HOUR'				=>	$time,
            	'IMAGEURL'			=>	$image_name,
            	'DELETION'			=>	'0'
            );

            $this->Staff_model->insert_staff($params);
            redirect('/admin/staff');

		} else {
			redirect('/');
		}
	}

	public function delete_staff()
	{
		if ( isset ( $_POST['submit'] ) ) {
			$params = array (
            	'DELETION'			=>	'1'
            );

            $this->Staff_model->update_staff($params, $_POST['del_no']);
            redirect('/admin/staff');
		} else{
			redirect('/');
		}
	}

	public function update_staff()
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
	            	'FIRSTNAME'			=>	$_POST['fname'],
	            	'MIDDLEINI'			=>	$_POST['mini'],
	            	'LASTNAME'			=>	$_POST['lname'],
	            	'DESCRIPTION'		=>	$_POST['description'],
	            	'POSITION'			=>	$_POST['position'],
	            	'DATE'				=>	$date,
	            	'HOUR'				=>	$time,
	            	'IMAGEURL'			=>	$image_name,
	            	'DELETION'			=>	'0'
            	);
        	} else{
        		
            	$params = array (
	            	'FIRSTNAME'			=>	$_POST['fname'],
	            	'MIDDLEINI'			=>	$_POST['mini'],
	            	'LASTNAME'			=>	$_POST['lname'],
	            	'DESCRIPTION'		=>	$_POST['description'],
	            	'POSITION'			=>	$_POST['position'],
	            	'DATE'				=>	$date,
	            	'HOUR'				=>	$time,
	            	'DELETION'			=>	'0'
            	);
        	}

            $this->Staff_model->update_staff($params, $_POST['del_no']);
            redirect('/admin/staff');
		} else{
			redirect('/');
		}
	}

}