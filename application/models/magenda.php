<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Magenda extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($tgl, $nama, $ket)
	{
		$data = array(
			'tgl_agenda' => $tgl,
			'nama_agenda' => $nama,
			'ket_agenda' => $ket
			);
		$this->db->insert('agenda', $data);
	}

	public function update($id, $tgl, $nama, $ket)
	{
		$data = array(
			'tgl_agenda' => $tgl,
			'nama_agenda' => $nama,
			'ket_agenda' => $ket
			);
		$this->db->where('id_agenda', $id);
		$this->db->update('agenda', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_agenda', $id);
		$this->db->delete('agenda');
	}

	public function clear()
	{
		$this->db->empty_table('agenda');
	}

	public function ambilData($value='')
	{
		$data = array();
		$this->db->select('id_agenda, tgl_agenda, nama_agenda, ket_agenda');
		$this->db->like('tgl_agenda', $value, 'left');
		$this->db->like('nama_agenda', $value, 'left');
		$this->db->like('ket_agenda', $value, 'left');
		$this->db->order_by('tgl_agenda', 'desc');
		$query = $this->db->get('agenda');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getDataById($value='')
	{
		$this->db->select('id_agenda, tgl_agenda, nama_agenda, ket_agenda');
		$this->db->where('id_agenda', $value);
		$query = $this->db->get('agenda');
		$data = $query->result_array();
		return $data;
	}

	public function get7Days()
	{
		$data = array();
		$this->db->select('id_agenda, tgl_agenda, nama_agenda, ket_agenda');
		$this->db->order_by('tgl_agenda', 'desc');
		$this->db->limit(7);
		$query = $this->db->get('agenda');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}
}