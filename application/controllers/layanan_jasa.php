<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Layanan_jasa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambah($value='')
	{
		$data['judul'] = 'Tambah Layanan dan Jasa';
		$data['konten'] = 'admin/ass_insert_layanan_jasa';
		$data['aktif'] = 'active';
		$data['id_meta'] = $this->mmeta->generateId();
		$this->load->view('admin/index', $data, FALSE);
	}

	public function ubah_layanan_jasa($value='')
	{
		$data['judul'] = 'Ubah Data Layanan dan Jasa';
		$data['konten'] = 'admin/ass_update_layanan_jasa';
		$data['aktif'] = 'active';
		$data['layanan'] = $this->mlayanan_jasa->getDataById($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function simpan()
	{
		$nama = $this->input->post('txtNama');
		$isi = $this->input->post('txtDeskripsi');

		$meta = $this->input->post('txtIdMeta');
		$key = $this->input->post('txtKeywords');
		$desc = $this->input->post('txtDesc');
		
		$count = $this->db->count_all('layanan');
		if ($count > 0) {
			$this->mlayanan_jasa->update(1, $nama, $isi);
			$this->mmeta->update($meta, $key, $desc);
		}
		else{
			$this->mmeta->insert($meta, null, $key, $desc);
			$this->mlayanan_jasa->insert($meta, $nama, $isi);
		}
		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/layanan_jasa', 'refresh');
	}

	public function ubah()
	{
		$id = "";
		$nama = "";
		$desc = "";
		$gambar = "";
		$this->mlayanan_jasa->update($id, $nama, $desc, $gambar);
		$this->session->set_flashdata('message', 'Data berhasil disimpan.');
		redirect('admin/layanan_jasa', 'refresh');
	}

	public function hapus($value)
	{
		$this->mlayanan_jasa->delete($value);
		$this->session->set_flashdata('message', 'Data berhasil dihapus.');
		redirect('admin/layanan_jasa', 'refresh');
	}

	public function hapus_semua()
	{
		$this->mlayanan_jasa->clear();
		$this->session->set_flashdata('message', 'Data berhasil dihapus.');
		redirect('admin/layanan_jasa', 'refresh');
	}
}