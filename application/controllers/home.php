<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Home Controller 
*/
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

} // end Home