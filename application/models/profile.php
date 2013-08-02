<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Profile Model 
*/
class Profile extends CI_Model {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function index(){
		//some code
	}

	public function getUser($username){

		$sql = "SELECT * FROM user_profiles WHERE username = ?";
		$query  = $this->db->query($sql, $username);

		if($query){
			return $query->result_array();
		}
	}

} // end Profile