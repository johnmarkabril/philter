<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Home";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
    }

	public function index()
	{


		if (empty($this->session->userdata('session_data'))) {
			$details = array (
				'get_latest_new'			=>		$this->News_model->get_latest_new(),
				'get_news_business'			=>		$this->News_model->get_news_business(),
				'get_news_entertainment'	=>		$this->News_model->get_news_entertainment(),
				'get_news_globalnation'		=>		$this->News_model->get_news_globalnation(),
				'get_news_lifestyle'		=>		$this->News_model->get_news_lifestyle(),
				'get_news_news'				=>		$this->News_model->get_news_news(),
				'get_news_opinion'			=>		$this->News_model->get_news_opinion(),
				'get_news_sports'			=>		$this->News_model->get_news_sports(),
				'get_news_technology'		=>		$this->News_model->get_news_technology(),
				'get_stories_new'			=>		$this->Stories_model->get_stories_new()

			);
			$data['content']	=	$this->load->view('user/home', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/');
		}

	}
}






