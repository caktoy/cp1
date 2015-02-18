<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Agenda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambah($value='')
	{
		$data['judul'] = 'Tambah Agenda';
		$data['konten'] = 'admin/ass_insert_agenda';
		$data['aktif'] = 'active';
		$this->load->view('admin/index', $data, FALSE);
	}

	public function ubah_agenda($value='')
	{
		$data['judul'] = 'Ubah Data Agenda';
		$data['konten'] = 'admin/ass_update_agenda';
		$data['aktif'] = 'active';
		$data['agenda'] = $this->magenda->getDataById($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function simpan()
	{
		$tgl = $this->input->post('txtTgl');
		$nama = $this->input->post('txtNama');
		$ket = $this->input->post('txtKeterangan');
		$tanggal = date('Y-m-d', strtotime($tgl));
		$this->magenda->insert($tanggal, $nama, $ket);
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil disimpan.');
		redirect('admin/agenda', 'refresh');
	}

	public function ubah()
	{
		$id = $this->input->post('txtId');
		$tgl = $this->input->post('txtTgl');
		$nama = $this->input->post('txtNama');
		$ket = $this->input->post('txtKeterangan');
		$tanggal = date('Y-m-d', strtotime($tgl));
		$this->magenda->update($id, $tanggal, $nama, $ket);
		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Data berhasil diubah.');
		redirect('admin/agenda', 'refresh');
	}

	public function hapus($value)
	{
		$this->magenda->delete($value);
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/agenda', 'refresh');
	}

	public function hapus_semua()
	{
		$this->magenda->clear();
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/agenda', 'refresh');
	}
}