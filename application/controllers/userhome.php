<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	User Home Controller 
*/
class UserHome extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$user_data  = $this->session->all_userdata();
		$username = isset($user_data['username'])? $user_data['username'] : NULL;
		$this->load->model('password_model');
		

		if($this->session->userdata('logged_in')){
			$this->showPass();
		} else {
			redirect('login');
		}		
	}

	public function showPass($data = null){
		$this->load->model('password_model');
		$data = $this->password_model->getAll();
		
		if ($data === false){
			$this->load->view('header');
			$this->load->view('addNew');
			$this->load->view('footer');
		} else {
			$this->load->view('header');
			$this->load->view('passview',array('data' => $data));
			$this->load->view('footer');
		}
		

	}

	public function addNew(){
		$this->load->view('header');
		$this->load->view('addNew');
		$this->load->view('footer');
	}

	public function validate(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('app', 'Application', 'required');
		$this->form_validation->set_rules('user_id', 'User ID', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('addNew');
			$this->load->view('footer');

		} else {
			$this->insert();
		}
	}

	public function insert(){
		$this->load->model('password_model');
		$data = isset($_POST) ? $_POST : NULL;
		$data['username'] = $this->session->userdata('username');
		$this->password_model->insert($data);
	}

	public function edit($id = null){
		$this->load->model('password_model');
		$data = $this->password_model->editPass($id);
		$this->load->view('header');
		$this->load->view('editview', array('data' => $data ));
		$this->load->view('footer');
	}

	public function update(){
		$data = isset($_POST) ? $_POST : NULL;
		$this->load->model('password_model');
		$this->password_model->update($data);
	}

	public function delete($id = null){
		$this->load->model('password_model');
		$this->password_model->delete($id);
	} 


} // end Home