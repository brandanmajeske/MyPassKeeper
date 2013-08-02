<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Logout Controller 
*/
class Logout extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->driver('session');
		$this->clear_cache();

	} // end __construct

	public function index(){
		$data = 'Thanks for visiting!';
		redirect('login', $data);
	}

	 function clear_cache()
	    {
	        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
	        $this->output->set_header("Pragma: no-cache");
	        $this->session->sess_destroy();
	    }

} // end Logout