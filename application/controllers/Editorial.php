<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editorial extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Editorial";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
        $this->load->model('Editorial_model');
        $this->load->model('Editorial_comment_model');
    }

	public function index()
	{
        if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
            $details = array (
                'get_latest_new'                =>      $this->News_model->get_latest_new(),
                'get_all_editorial'             =>      $this->Editorial_model->get_all_editorial()
            );
            $data['content']    =   $this->load->view('user/editorial', $details, TRUE);
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
                'get_latest_new'                =>      $this->News_model->get_latest_new(),
                'get_specific_editorial'        =>      $this->Editorial_model->get_specific_editorial_no($no),
                'get_all_specific_comment'      =>      $this->Editorial_comment_model->get_all_specific_comment($no)
            );

            $data['content']    =   $this->load->view('user/editorial_post', $details, TRUE);
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
                    'EDITORIALNO'   =>  $_POST['user_editorialno']
                );

                $this->Editorial_comment_model->insert_comment($params);
                redirect('/editorial/post/'.$_POST['user_editorialno']);
            } else {
                redirect('/editorial/');
            }

        } else {
            redirect('/admin');
        }
    }
}