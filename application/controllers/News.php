<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "News";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
    }

	public function index()
	{
        if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
            $details = array (
                'get_latest_new'            =>      $this->News_model->get_latest_new(),
                'get_all_news'              =>      $this->News_model->get_all_news()
            );
            $data['content']    =   $this->load->view('user/news', $details, TRUE);
            $data['curpage'] = $this->curpage;
            $this->load->view('content', $data);
        } else {
            redirect('/admin');
        }
	}
}