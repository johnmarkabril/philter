<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->curpage = "Blog";
        $this->load->model('News_model');
        $this->load->model('Stories_model');
    }

	public function index()
	{
        if (empty($this->session->userdata('session_data'))) {
            $details = array (
                'get_latest_new'            =>      $this->News_model->get_latest_new()
            );
            $data['content']    =   $this->load->view('user/blog', $details, TRUE);
            $data['curpage'] = $this->curpage;
            $this->load->view('content', $data);
        } else {
            redirect('/');
        }
	}
}