<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*	Authentication Model 
*/
class Authentication extends CI_Model {

	function __construct(){
		parent::__construct();

	} // end __construct

	public function getUser($data){
		$username = $data['username'];
		$password = $data['password'];
		$sql = 	"SELECT id, username, first_name, last_name
			FROM users
			WHERE (username = ?)
			  AND (password = MD5(CONCAT(salt, ?)))";
		$query = $this->db->query($sql, array($username, $password));
		if($query->num_rows() === 1){
			$newdata = array(
			                   'username'  => $username,
			                   'logged_in' => TRUE
			               );
			$this->load->driver('session');
			$this->session->set_userdata($newdata);
			redirect('userhome', $newdata);

		} else {
			return FALSE;
		}	
	} // end loginUser


} // end Authentication