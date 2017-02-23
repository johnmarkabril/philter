<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Videos";
        $this->load->model('News_videos_model');
    }

	public function index()
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_videos'					=>	$this->News_videos_model->get_all_videos(),
				'get_specific_videos'				=>	$this->News_videos_model->get_latest_videos()
			);
			$data['content']	=	$this->load->view('admin/videos', $details, TRUE);
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
            $this->News_videos_model->update($params, $no);
            redirect('/admin/videos');
		} else {
			redirect('/');
		}
	}

	public function post($no)
	{
		if ($this->session->userdata('account_type') == "Administrator") {
			$details = array (
				'get_all_videos'					=>	$this->News_videos_model->get_all_videos(),
				'get_specific_videos'				=>	$this->News_videos_model->get_specific_videos($no)
			);
			$data['content']	=	$this->load->view('admin/videos', $details, TRUE);
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

            $params = array (
            	'NO'			=>	'',
            	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
            	'TITLE'			=>	$_POST['title'],
            	'DESCRIPTION'	=>	$_POST['description'],
	        	'VIDEOURL'		=>	$_POST['websiteurl'],
            	'DATE'			=>	$date,
            	'HOUR'			=>	$time,
            	'DELETION'		=>	'0'
            );

            $this->News_videos_model->insert($params);
            redirect('/admin/videos');

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

        	$params = array (
	        	'NAME'			=>	$this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
	        	'TITLE'			=>	$_POST['title'],
	        	'DESCRIPTION'	=>	$_POST['description'],
	        	'VIDEOURL'		=>	$_POST['websiteurl'],
	        	'DELETION'		=>	'0'
	        );
            $this->News_videos_model->update($params, $_POST['speno']);
            redirect('/admin/videos/post/'.$_POST['speno']);

		} else {
			redirect('/');
		}
	}

}