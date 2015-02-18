<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Berita extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambah_berita($value='')
	{
		$data['judul'] = 'Tulis Berita';
		$data['konten'] = 'admin/ass_insert_berita';
		$data['aktif'] = 'active';
		$data['id_gambar'] = $this->mgambar->generateId();
		$data['id_meta'] = $this->mmeta->generateId();
		$this->load->view('admin/index', $data, FALSE);
	}

	public function sunting_berita($value='')
	{
		$data['judul'] = 'Sunting Berita';
		$data['konten'] = 'admin/ass_update_berita';
		$data['aktif'] = 'active';
		$data['berita'] = $this->mberita->getDataById($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function simpan()
	{
		$judul = $this->input->post('txtJudul');
		$tgl = date('Y-m-d');
		$isi = $this->input->post('txtIsi');

		$id_meta = $this->input->post('txtIdMeta');
		$key = $this->input->post('txtKeyword');
		$desc = $this->input->post('txtDesc');

		$this->mmeta->insert($id_meta, NULL, $key, $desc);
		$this->mberita->insert($judul, $id_meta, $tgl, $isi);
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil disimpan.');
		redirect('admin/berita', 'refresh');
	}

	public function sunting()
	{
		$id = $this->input->post('txtId');
		$judul = $this->input->post('txtJudul');
		$tgl = date('Y-m-d');
		$isi = $this->input->post('txtIsi');

		$id_meta = $this->input->post('txtIdMeta');
		$key = $this->input->post('txtKeyword');
		$desc = $this->input->post('txtDesc');

		$this->mberita->update($id, $judul, $tgl, $isi);
		$this->mmeta->update($id_meta, $key, $desc);
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil disimpan.');
		redirect('admin/berita', 'refresh');
	}

	public function hapus($value)
	{
		$this->mberita->delete($value);
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil dihapus.');
		redirect('admin/berita', 'refresh');
	}

	public function hapus_semua()
	{
		$this->mberita->clear();
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil dihapus.');
		redirect('admin/berita', 'refresh');
	}
}