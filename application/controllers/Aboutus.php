<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "About us";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
    }

	public function index()
	{
		if (empty($this->session->userdata('user_session')) || $this->session->userdata('user_session')->POSITION == "User") {
			$details = array (
				'get_latest_new'			=>		$this->News_model->get_latest_new()
			);
			$data['content']	=	$this->load->view('user/aboutus', $details, TRUE);
			$data['curpage'] = $this->curpage;
			$this->load->view('content', $data);
		} else {
			redirect('/admin');
		}
	}
}