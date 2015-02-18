<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Mproduk extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function update_gambar($gambar){
		$id = $this->input->post('id_produk');
		$foto = $gambar;
		$data = array(
			'gambar_produk' => $foto
		);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}

	public function insert($meta, $nama, $deskripsi)
	{
		$data = array(
			'id_meta' => $meta,
			'nama_produk' => $nama,
			'deskripsi_produk' => $deskripsi
			);
		$this->db->insert('produk', $data);
	}

	public function update($id, $nama, $deskripsi)
	{
		$data = array(
			'nama_produk' => $nama,
			'deskripsi_produk' => $deskripsi
			);
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}

	public function clear()
	{
		$this->db->empty_table('produk');
	}

	public function ambilData($value='', $num=NULL, $offset=NULL)
	{
		$data = array();
		$this->db->select('id_produk, produk.id_meta, nama_produk, deskripsi_produk, meta.id_gambar, isi_gambar');
		$this->db->join('meta', 'produk.id_meta = meta.id_meta', 'left');
		$this->db->join('gambar', 'meta.id_gambar = gambar.id_gambar', 'left');
		$this->db->like('nama_produk', $value, 'left');
		$this->db->like('deskripsi_produk', $value, 'left');
		$query = $this->db->get('produk', $num, $offset);
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $value) {
				$data[] = $value;
			}
		}
		$query->free_result();
		return $data;
	}

	public function getData()
	{
		$this->db->select('id_produk, produk.id_meta, nama_produk, deskripsi_produk, meta.id_gambar, isi_gambar');
		$this->db->from('produk');
		$this->db->join('meta', 'produk.id_meta = meta.id_meta', 'left');
		$this->db->join('gambar', 'meta.id_gambar = gambar.id_gambar', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDataById($value)
	{
		$this->db->select('id_produk, nama_produk, deskripsi_produk, produk.id_meta, key_meta, desc_meta, meta.id_gambar, isi_gambar');
		$this->db->from('produk');
		$this->db->join('meta', 'produk.id_meta = meta.id_meta', 'left');
		$this->db->join('gambar', 'meta.id_gambar = gambar.id_gambar', 'left');
		$this->db->where('id_produk', $value);
		$this->db->limit(1);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data;
	}

	public function getTop5()
	{
		$data = array();
		$this->db->select('id_produk, produk.id_meta, nama_produk, deskripsi_produk, meta.id_gambar, isi_gambar');
		$this->db->from('produk');
		$this->db->join('meta', 'produk.id_meta = meta.id_meta', 'left');
		$this->db->join('gambar', 'meta.id_gambar = gambar.id_gambar', 'left');
		$this->db->limit(5);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getTop3()
	{
		$data = array();
		$this->db->select('id_produk, produk.id_meta, nama_produk, deskripsi_produk, meta.id_gambar, isi_gambar');
		$this->db->from('produk');
		$this->db->join('meta', 'produk.id_meta = meta.id_meta', 'left');
		$this->db->join('gambar', 'meta.id_gambar = gambar.id_gambar', 'left');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result_array();
	}
}