<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Blog";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
        $this->load->model('Blog_model');
        $this->load->model('Blog_comment_model');
    }

	public function index()
	{
        if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
            $details = array (
                'get_latest_new'            =>      $this->News_model->get_latest_new(),
                'get_all_blog'              =>      $this->Blog_model->get_all_blog()
            );
            $data['content']    =   $this->load->view('user/blog', $details, TRUE);
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
                'get_latest_new'                    =>      $this->News_model->get_latest_new(),
                'get_all_blog'                      =>      $this->Blog_model->get_all_blog(),
                'get_specific_blog'                 =>      $this->Blog_model->get_specific_blog($no),
                'get_specific_comment_blog'         =>      $this->Blog_comment_model->get_specific_comment_blog($this->uri->segment(3))
            );
            $data['content']    =   $this->load->view('user/blog_post', $details, TRUE);
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
                    'COMMENT'       =>  $_POST['user_blogcomment'],
                    'IMAGEURL'      =>  $this->session->userdata('user_session')->IMAGEURL,
                    'DATE'          =>  $date,
                    'HOUR'          =>  $time,
                    'DELETION'      =>  '0',
                    'BLOGNO'        =>  $_POST['user_blogno']
                );

                $this->Blog_comment_model->insert_comment($params);
                redirect('/blog/post/'. $_POST['user_blogno']);
            } else {
                redirect('/blog/');
            }

        } else {
            redirect('/admin');
        }
    }
}