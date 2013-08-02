<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Main Controller 
*/
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login(){
		$data = isset($_POST) ? $_POST : NULL;
		if(isset($data)){
			$loggedIn = $this->authentication->getUser($data);
			if($loggedIn === FALSE){
				$error = 'Unable to log in';
				$this->load->view('header');
				$this->load->view('error');
				$this->load->view('login');
				$this->load->view('footer');
			}
		}
		else 
		{
			redirect('login');
		}
	}

} // end Main