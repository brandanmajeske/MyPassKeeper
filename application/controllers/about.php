<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	About Controller 
*/
class About extends CI_Controller {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

} // end About