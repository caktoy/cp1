<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Muser extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->database();
	}

	public function validasi($username, $password)
	{
		$this->db->select('user_id, user_nama, user_password');
		$this->db->where('user_nama', $username);
		$this->db->where('user_password', $password);
		$this->db->limit(1);
		$query = $this->db->get('user');
		if ($query->num_rows()>0) {
			$data = $query->row_array();
			return $data;
		}
		else{
			return array();
		}
	}

	public function perbarui($id, $nama, $password)
	{
		$data = array('user_nama' => $nama, 'user_password' => $password);
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
	}
}