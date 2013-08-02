<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Contact Controller 
*/
class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}

} // end Contact