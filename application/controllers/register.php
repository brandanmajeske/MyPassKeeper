<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Registration Controller 
*/
class Register extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function validate(){
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]|strtolower');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]|strtolower');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('tos', 'Terms of Service', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		}
		else
		{	
			$this->load->model('register_user');
			$data = $_POST;
			$this->register_user->insert($data);
		}
	}

} // end Register