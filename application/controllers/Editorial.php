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
    }

	public function index()
	{
        if (empty($this->session->userdata('session_data'))) {
            $details = array (
                'get_latest_new'                =>      $this->News_model->get_latest_new(),
                'get_all_editorial'             =>      $this->Editorial_model->get_all_editorial()
            );
            $data['content']    =   $this->load->view('user/editorial', $details, TRUE);
            $data['curpage'] = $this->curpage;
            $this->load->view('content', $data);
        } else {
            redirect('/');
        }
	}

    public function post($hasheditorial)
    {
        if (empty($this->session->userdata('session_data'))) {
            $details = array (
                'get_latest_new'                =>      $this->News_model->get_latest_new(),
                'get_specific_editorial'        =>      $this->Editorial_model->get_specific_editorial($hasheditorial)
            );

            $data['content']    =   $this->load->view('user/editorial_post', $details, TRUE);
            $data['curpage'] = $this->curpage;
            $this->load->view('content', $data);
        } else {
            redirect('/');
        }
    }
}