<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Home";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
        $this->load->model('Blog_model');
        $this->load->model('Editorial_model');
        $this->load->model('Feature_model');
        $this->load->model('Entertainment_model');
        $this->load->model('News_videos_model');

    }

	public function index()
	{
		if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
			$details = array (
				'get_latest_new'				=>		$this->News_model->get_latest_new(),
				'get_latest_feature'			=>		$this->Feature_model->get_latest_feature(),
				'get_latest_editorial'			=>		$this->Editorial_model->get_latest_editorial(),
				'get_two_latest_entertainment'	=>		$this->Entertainment_model->get_two_latest_entertainment()
				// 'get_news_business'			=>		$this->News_model->get_news_business(),
				// 'get_news_entertainment'	=>		$this->News_model->get_news_entertainment(),
				// 'get_news_globalnation'		=>		$this->News_model->get_news_globalnation(),
				// 'get_news_lifestyle'		=>		$this->News_model->get_news_lifestyle(),
				// 'get_news_news'				=>		$this->News_model->get_news_news(),
				// 'get_news_opinion'			=>		$this->News_model->get_news_opinion(),
				// 'get_news_sports'			=>		$this->News_model->get_news_sports(),
				// 'get_latest_blog_three'		=>		$this->Blog_model->get_latest_blog_three(),
				// 'get_news_technology'		=>		$this->News_model->get_news_technology(),
				// 'get_stories_new'			=>		$this->Stories_model->get_stories_new(),
				// 'get_all_news_videos_limit'	=>		$this->News_videos_model->get_all_news_videos_limit()
			);
			$data['content']	=	$this->load->view('user/home', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/admin');
		}

	}
}






