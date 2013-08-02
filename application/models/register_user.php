<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Register User 
*/
class Register_user extends CI_Model {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function insert($data){
		
		$username = $data['username'];
		$salt = date('mYs');
		$pass = $data['password'];
		$password = MD5($salt . $pass);
		$email = $data['email'];
		$first_name = $data['first_name'];
		$last_name = $data['last_name'];

		$profile_data = array(
			"username" => $username,
			"name" => "$first_name $last_name",
			"join_date" => date('n/j/Y')
			);

		$sql = "INSERT INTO users 
			(`username`, `email`, `first_name`, `last_name`, `password`, `salt`)
			values (?,?,?,?,?,?)";
		$query = $this->db->query($sql, array($username, $email, $first_name, $last_name, $password, $salt));
		$this->createProfile($profile_data);
		redirect('userhome', $username);
	}

	private function createProfile($profile_data){
		$username = $profile_data['username'];
		$name = $profile_data['name'];
		$join_date = $profile_data['join_date'];
		$sql = "INSERT INTO user_profiles 
			( `username`,`name`, `join_date`) 
			VALUES (?,?,?)";
		$query = $this->db->query($sql, array($username, $name, $join_date));
	}

} // end Register