<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mmeta extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($id='', $gambar='', $key='', $desc='')
	{
		$object = array('id_meta' => $id, 'id_gambar' => $gambar, 'key_meta' => $key, 'desc_meta' => $desc);
		$this->db->insert('meta', $object);
	}

	public function update($id='', $key='', $desc='')
	{
		$object = array('key_meta' => $key, 'desc_meta' => $desc);
		$this->db->where('id_meta', $id);
		$this->db->update('meta', $object);
	}

	public function delete($id='')
	{
		$this->db->where('id_meta', $id);
		$this->db->delete('meta');
	}

	public function getData($id='')
	{
		$this->db->select('id_meta, id_gambar, key_meta, desc_meta');
		$this->db->where('id_meta', $id);
		$data = $this->db->get('meta');
		return $data;
	}

	public function generateId()
	{
		$data = 0;
		$this->db->select_max('id_meta');
		$query = $this->db->get('meta');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $value) {
				$data = $value['id_meta'];
			}
		}
		return $data+1;
	}
}