<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*	password db model
*
*/


class Password_model extends CI_Model {

	public function __construc(){
		parent::__construct();		
	}
	
	public function index(){
		
	}

	public function getAll(){
		$username = $this->session->userdata('username');
		$sql = "SELECT * FROM passwords WHERE username = ?";
		$query = $this->db->query($sql, $username);
		
		if($query->num_rows() > 0){
			
			 return $query->result_array();

	}else {
			return FALSE;
		}
	} // end getAll

	public function editPass($id){
		$sql = "SELECT * FROM passwords WHERE `id` = ?";
		$query = $this->db->query($sql, $id);
		if($query->num_rows() > 0){
			return $query->result_array();
		} else {
			echo 'no result found';
		}
	} // end editPass

	public function validate(){
		
	}

	public function insert($data){
		$username = $data['username'];
		$app = $data['app'];
		$uid = strtoupper($data['user_id']);
		$pwd = base64_encode($data['password']);
		

		$sql = "INSERT INTO passwords (`username`,`application`, `user_id`, `password`) VALUES (?,?,?,?)";
		$query = $this->db->query($sql, array($username, $app, $uid, $pwd));
		if($query){
			redirect(base_url());
		}
	}

	public function update($data){
		
		$id = $data['id'];
		$pwd = base64_encode($data['password']);
		$sql = "UPDATE passwords SET `password` = ? WHERE `id` = ?";
		$query = $this->db->query($sql, array($pwd, $id));

		if($query){
			redirect(base_url());
		}		
	}

	public function delete($id){
		$sql = "DELETE FROM passwords WHERE `id` = ?";
		$query = $this->db->query($sql, $id);
		if($query){
			redirect(base_url());
		}
	}


} // End Password_model