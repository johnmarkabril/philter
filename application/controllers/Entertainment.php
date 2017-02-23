<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entertainment extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Entertainment";
        $this->load->model('News_model');
        $this->load->model('Entertainment_model');
        $this->load->model('Entertainment_comment_model');
        $this->load->model('News_videos_model');


    }

	public function index()
	{
		if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
			$details = array (
                'get_latest_new'            =>      $this->News_model->get_latest_new(),
                'get_all_entertainment'		=>		$this->Entertainment_model->get_all_entertainment()
			);
			$data['content']	=	$this->load->view('user/entertainment', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/admin');
		}

	}

	public function post($no)
	{
		if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
			$details = array (
                'get_latest_new'            	=>      $this->News_model->get_latest_new(),
                'get_all_entertainment'			=>		$this->Entertainment_model->get_all_entertainment(),
                'get_specific_entertainment'	=>		$this->Entertainment_model->get_specific_entertainment_no($no),
                'get_all_specific_comment'		=>		$this->Entertainment_comment_model->get_all_specific_comment($no)
			);
			$data['content']	=	$this->load->view('user/entertainment_post', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/admin');
		}
	}

    public function insertcomment()
    {
        if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
            
            if ( isset ( $_POST['submit'] ) ) {

                date_default_timezone_set("Asia/Manila");
                $date = date("F d, Y");
                $time = date("g:i A");

                $params = array (
                    'NO'            =>  '',
                    'NAME'          =>  $this->session->userdata('user_session')->FIRSTNAME." ".$this->session->userdata('user_session')->LASTNAME,
                    'COMMENT'       =>  $_POST['user_editorialcomment'],
                    'IMAGEURL'      =>  $this->session->userdata('user_session')->IMAGEURL,
                    'DATE'          =>  $date,
                    'HOUR'          =>  $time,
                    'DELETION'      =>  '0',
                    'ENTERTAINMENTNO'   =>  $_POST['user_editorialno']
                );

                $this->Entertainment_comment_model->insert_comment($params);
                redirect('/entertainment/post/'.$_POST['user_editorialno']);
            } else {
                redirect('/entertainment/');
            }

        } else {
            redirect('/admin');
        }
    }

}