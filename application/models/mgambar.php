<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mgambar extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($id='', $gambar='')
	{
		$object = array('id_gambar' => $id, 'isi_gambar' => $gambar);
		$this->db->insert('gambar', $object);
	}

	public function update($id='', $gambar='')
	{
		$object = array('isi_gambar' => $gambar);
		$this->db->where('id_gambar', $id);
		$this->db->update('gambar', $object);
	}

	public function delete($id='')
	{
		$this->db->where('id_gambar', $id);
		$this->db->delete('gambar');
	}

	public function getData()
	{
		$this->db->select('id_gambar, isi_gambar');
		$data = $this->db->get('gambar');
		return $data->result_array();
	}

	public function getDataById($id='')
	{
		$this->db->select('id_gambar, isi_gambar');
		$this->db->where('id_gambar', $id);
		$data = $this->db->get('gambar');
		return $data;
	}

	public function generateId()
	{
		$data = 0;
		$this->db->select_max('id_gambar');
		$query = $this->db->get('gambar');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $value) {
				$data = $value['id_gambar'];
			}
		}
		$query->free_result();
		return $data+1;
	}
}