<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mprofil extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($nama, $profil, $meta)
	{
		$data = array(
			'nama_perusahaan' => $nama,
			'profil_perusahaan' => $profil,
			'id_meta' => $meta
			);
		$this->db->insert('profil', $data);
	}

	public function update($id, $nama, $profil)
	{
		$data = array(
			'nama_perusahaan' => $nama,
			'profil_perusahaan' => $profil,
			);
		$this->db->where('id_profil', $id);
		$this->db->update('profil', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_profil', $id);
		$this->db->delete('profil');
	}

	public function clear()
	{
		$this->db->empty_table('profil');
	}

	public function ambilData()
	{
		$this->db->select('id_profil, nama_perusahaan, profil_perusahaan, profil.id_meta, key_meta, desc_meta');
		$this->db->from('profil');
		$this->db->join('meta', 'profil.id_meta = meta.id_meta', 'left');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row_array();
	}
}