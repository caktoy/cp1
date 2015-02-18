<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mlayanan_jasa extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($meta, $nama, $deskripsi)
	{
		$data = array(
			'nama_layanan' => $nama,
			'deskripsi_layanan' => $deskripsi,
			'id_meta' => $meta
			);
		$this->db->insert('layanan', $data);
	}

	public function update($id, $nama, $deskripsi)
	{
		$data = array(
			'nama_layanan' => $nama,
			'deskripsi_layanan' => $deskripsi,
			);
		$this->db->where('id_layanan', $id);
		$this->db->update('layanan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_layanan', $id);
		$this->db->delete('layanan');
	}

	public function clear()
	{
		$this->db->empty_table('layanan');
	}

	public function ambilData($value='')
	{
		$this->db->select('id_layanan, nama_layanan, deskripsi_layanan, meta.id_meta, key_meta, desc_meta');
		$this->db->from('layanan');
		$this->db->join('meta', 'layanan.id_meta = meta.id_meta', 'left');
		$this->db->like('nama_layanan', $value, 'left');
		$this->db->like('deskripsi_layanan', $value, 'left');
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getDataById($value='')
	{
		$this->db->select('id_layanan, nama_layanan, deskripsi_layanan, meta.id_meta, key_meta, desc_meta');
		$this->db->from('layanan');
		$this->db->join('meta', 'layanan.id_meta = meta.id_meta', 'left');
		$this->db->where('id_layanan', $value);
		$this->db->limit(1);
		$data = $this->db->get();
		return $data->row_array();
	}

	public function getData()
	{
		$this->db->select('id_layanan, nama_layanan, deskripsi_layanan, meta.id_meta, key_meta, desc_meta');
		$this->db->from('layanan');
		$this->db->join('meta', 'layanan.id_meta = meta.id_meta', 'left');
		$this->db->limit(1);
		$data = $this->db->get();
		return $data->row_array();
	}
}