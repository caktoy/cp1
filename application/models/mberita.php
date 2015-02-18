<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mberita extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert($judul, $meta, $tgl, $isi)
	{
		$data = array(
			'judul_berita' => $judul,
			'id_meta' => $meta,
			'tanggal_berita' => $tgl,
			'isi_berita' => $isi
			);
		$this->db->insert('berita', $data);
	}

	public function update($id, $judul, $tgl, $isi)
	{
		$data = array(
			'judul_berita' => $judul,
			'tanggal_berita' => $tgl,
			'isi_berita' => $isi
			);
		$this->db->where('id_berita', $id);
		$this->db->update('berita', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_berita', $id);
		$this->db->delete('berita');
	}

	public function clear()
	{
		$this->db->empty_table('berita');
	}

	public function ambilData($value='', $num=NULL, $offset=NULL)
	{
		$this->db->select('id_berita, judul_berita, tanggal_berita, isi_berita, berita.id_meta, key_meta, desc_meta');
		//$this->db->from('berita');
		$this->db->join('meta', 'berita.id_meta = meta.id_meta', 'left');
		$this->db->like('judul_berita', $value, 'left');
		$this->db->like('isi_berita', $value, 'left');
		$data = $this->db->get('berita', $num, $offset);

		return $data->result_array();
	}

	public function search($value='')
	{
		$this->db->select('id_berita, judul_berita, tanggal_berita, isi_berita, berita.id_meta, key_meta, desc_meta');
		//$this->db->from('berita');
		$this->db->join('meta', 'berita.id_meta = meta.id_meta', 'left');
		$this->db->like('judul_berita', $value, 'left');
		$this->db->like('isi_berita', $value, 'left');
		$data = $this->db->get('berita');

		return $data->result_array();
	}

	public function getDataById($value='')
	{
		$this->db->select('id_berita, judul_berita, tanggal_berita, isi_berita, berita.id_meta, key_meta, desc_meta');
		$this->db->from('berita');
		$this->db->join('meta', 'berita.id_meta = meta.id_meta', 'left');
		$this->db->where('id_berita', $value);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data;
	}

	public function getTop5()
	{
		$this->db->select('id_berita, judul_berita, tanggal_berita, isi_berita, berita.id_meta, key_meta, desc_meta');
		$this->db->from('berita');
		$this->db->join('meta', 'berita.id_meta = meta.id_meta', 'left');
		$this->db->limit(5);
		$data = $this->db->get();

		return $data->result_array();
	}

	public function getTop3()
	{
		$this->db->select('id_berita, judul_berita, tanggal_berita, isi_berita, berita.id_meta, key_meta, desc_meta');
		$this->db->from('berita');
		$this->db->join('meta', 'berita.id_meta = meta.id_meta', 'left');
		$this->db->limit(3);
		$data = $this->db->get();

		return $data->result_array();
	}
}