<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->curpage = "Login";
    }

	public function index()
	{
		// if ( !empty($this->session->userdata['session_data']) ) {
		// 	redirect('/student');
		// } else {
		// 	$this->load->library('form_validation');
		// 	$this->form_validation->set_rules('login_idnum','IdNumber','required');
		// 	$this->form_validation->set_rules('login_password','Password','required');

		// 	if($this->form_validation->run() == FALSE){
		// 		$details = array (

		// 		);
		// 		$data['content']	=	$this->load->view('login', $details, TRUE);
		// 		$data['curpage']	= 	$this->curpage;
		// 		$this->load->view('contentfile_student', $data);
		// 	}else{
		// 		$c_idnum = set_value('login_idnum');
		// 		$c_password = set_value('login_password');
		// 		$valid = $this->Users_model->check_idnum_pass($c_idnum, $c_password);
		// 		$this->session->set_userdata('account_type', $valid->POSITION);
		// 		if($valid != false){
		// 			if ($_SESSION['account_type'] == "Student") {
		// 				$data = $this->session->set_userdata('session_data',$valid);
		// 				redirect('/student');
		// 				// print_r($data);
		// 			}else if ($_SESSION['account_type'] == "Librarian"){
		// 				$data = $this->session->set_userdata('session_data',$valid);
		// 				redirect('/admin');
		// 			}
		// 		}else{
		// 			redirect('/');
		// 		}
		// 	}
		// }
	}

	
}
