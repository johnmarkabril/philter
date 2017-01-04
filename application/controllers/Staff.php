<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->curpage = "Staff";
        $this->load->model('News_model');
        $this->load->model('Staff_model');
    }

    public function index()
    {
        if (empty($this->session->userdata('session_data'))) {
            $details = array (
                'get_latest_new'            =>      $this->News_model->get_latest_new(),
                'get_all_staff'             =>      $this->Staff_model->get_all_staff()
            );
            $data['content']    =   $this->load->view('user/staff', $details, TRUE);
            $data['curpage'] = $this->curpage;
            $this->load->view('content', $data);
        } else {
            redirect('/');
        }
    }
}