<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Produk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function tambah($value='')
	{
		$data['judul'] = 'Tambah Produk';
		$data['konten'] = 'admin/ass_insert_produk';
		$data['aktif'] = 'active';
		$data['id_gambar'] = $this->mgambar->generateId();
		$data['id_meta'] = $this->mmeta->generateId();
		$this->load->view('admin/index', $data, FALSE);
	}

	public function ubah_produk($value='')
	{
		$d_produk = $this->mproduk->getDataById($value);
		$data['id_produk'] = $d_produk['id_produk'];
		$data['nama_produk'] = $d_produk['nama_produk'];
		$data['deskripsi_produk'] = $d_produk['deskripsi_produk'];
		$data['isi_gambar'] = $d_produk['isi_gambar'];
		$data['id_meta'] = $d_produk['id_meta'];
		$data['key_meta'] = $d_produk['key_meta'];
		$data['desc_meta'] = $d_produk['desc_meta'];
		$data['id_gambar'] = $d_produk['id_gambar'];
		
		$data['judul'] = 'Ubah Data Produk';
		$data['konten'] = 'admin/ass_update_produk';
		$data['aktif'] = 'active';
		$data['produk'] = $this->mproduk->getDataById($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function simpan()
	{
		$nama = $this->input->post('txtNama');
		$deskripsi = $this->input->post('txtDeskripsi');
		$id_gambar = $this->input->post('txtIdGambar');
		$gambar = $this->input->post('gambar');
		$id_meta = $this->input->post('txtIdMeta');
		$keyword = $this->input->post('txtKeyword');
		$desc = $this->input->post('txtDesc');
		
		if(($nama_file = $this->upload_gambar()) != 'gagal'){
			//gambar
			$this->mgambar->insert($id_gambar, $nama_file);
			//meta
			$this->mmeta->insert($id_meta, $id_gambar, $keyword, $desc);
			//produk
			$this->mproduk->insert($id_meta, $nama, $deskripsi);
			$this->session->set_flashdata('success', '<strong>Sukses!</strong> Produk berhasil disimpan.');
			redirect('admin/produk', 'refresh');
		}
		else{
			$this->session->set_flashdata('error', '<strong>Gagal!</strong> Terjadi kesalahan dengan gambar yang Anda pilih.');
			redirect('produk/tambah', 'refresh');
		}
	}

	public function upload_gambar()
	{
		$config['upload_path'] = './assets/img/produk/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1600';
		$config['max_height']  = '1200';
		$config['max_filename'] = '100';
		$config['file_name'] = 'produk_'.date('dmY').'_'.time();
		
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('gambar')){
			$data = $this->upload->data();
			return $config['file_name'].$data['file_ext'];
		}
		else{
			$error = array('error' => $this->upload->display_errors());
			return "gagal";
		}
	}

	public function ubah()
	{
		$id_produk = $this->input->post('txtIdProduk');
		$nama = $this->input->post('txtNama');
		$deskripsi = $this->input->post('txtDeskripsi');
		$id_meta = $this->input->post('txtIdMeta');
		$keyword = $this->input->post('txtKeyword');
		$desc = $this->input->post('txtDesc');

		//meta
		$this->mmeta->update($id_meta, $keyword, $desc);
		//produk
		$this->mproduk->update($id_produk, $nama, $deskripsi);
		$this->session->set_flashdata('success', '<strong>Sukses!</strong> Perubahan produk berhasil disimpan.');
		redirect('admin/produk', 'refresh');
	}

	public function ubah_gambar()
	{
		$id_produk = $this->input->post('txtIdProdukGambar');
		$id_gambar = $this->input->post('txtIdGambar');
		$isi_gambar = $this->input->post('txtIsiGambar');
		$gambar = $this->input->post('gambar');
		//$nama_file = $this->upload_gambar();

		$config['upload_path'] = './assets/img/produk/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1600';
		$config['max_height']  = '1200';
		$config['max_filename'] = '100';
		$config['file_name'] = 'produk_'.date('dmY').'_'.time();
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', '<strong>Gagal!</strong> '.$error['error']);
			redirect('produk/ubah_produk/'.$id_produk, 'refresh');
		}
		else{
			$data = $this->upload->data();
			$nama_file = $config['file_name'].$data['file_ext'];

			$this->mgambar->update($id_gambar, $nama_file);
			$dir_gambar = './assets/img/produk/'.$isi_gambar;
			unlink($dir_gambar);

			$this->session->set_flashdata('success', '<strong>Sukses!</strong> Perubahan produk berhasil disimpan.');
			redirect('admin/produk', 'refresh');
		}

		/*
		if ($nama_file != 'gagal') {
			$this->mgambar->update($id_gambar, $nama_file);
			$dir_gambar = base_url().'assets/img/produk/'.$isi_gambar;
			unlink($dir_gambar);

			$this->session->set_flashdata('success', '<strong>Sukses!</strong> Perubahan produk berhasil disimpan.');
			redirect('admin/produk', 'refresh');
		}
		else{
			$this->session->set_flashdata('error', '<strong>Gagal!</strong> Terjadi kesalahan saat mengunggah gambar Anda.');
			redirect('produk/ubah_produk/'.$id_produk, 'refresh');
		}*/
	}

	public function hapus($produk, $meta, $gambar, $isi_gambar)
	{
		$this->mproduk->delete($produk);
		$this->mmeta->delete($meta);
		$this->mgambar->delete($gambar);
		$file = './assets/img/produk/'.$isi_gambar;
		unlink($file);
		$this->session->set_flashdata('message', 'Data berhasil dihapus.');
		redirect('admin/produk', 'refresh');
	}

	public function hapus_semua()
	{
		$this->mproduk->clear();
		$this->session->set_flashdata('message', 'Data berhasil dihapus.');
		redirect('admin/produk', 'refresh');
	}

	public function detil_produk($value='')
	{
		$d_produk = $this->mproduk->getDataById($value);
		$data['id_produk'] = $d_produk['id_produk'];
		$data['nama_produk'] = $d_produk['nama_produk'];
		$data['deskripsi_produk'] = $d_produk['deskripsi_produk'];
		$data['isi_gambar'] = $d_produk['isi_gambar'];
		$data['id_meta'] = $d_produk['id_meta'];
		$data['key_meta'] = $d_produk['key_meta'];
		$data['desc_meta'] = $d_produk['desc_meta'];
		$data['id_gambar'] = $d_produk['id_gambar'];

		$data['judul'] = 'Detil Produk';
		$data['konten'] = 'admin/ass_detil_produk';
		$data['aktif'] = 'active';
		$data['produk'] = $this->mproduk->getDataById($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function cetak_produk($id)
	{
		$d_produk = $this->mproduk->getDataById($id);
		$data['logo'] = base_url().'assets/img/logo-org.jpg';
		$data['id_produk'] = $d_produk['id_produk'];
		$data['nama_produk'] = $d_produk['nama_produk'];
		$data['deskripsi_produk'] = $d_produk['deskripsi_produk'];
		$data['isi_gambar'] = base_url().'assets/img/produk/'.$d_produk['isi_gambar'];
		$data['judul'] = "Detil ".$d_produk['nama_produk'];
		$this->load->view('guest/cetak_produk', $data, FALSE);
	}

	public function cetak_katalog()
	{
		$data['judul'] = "Katalog Produk";
		$data['produk'] = $this->mproduk->getData();
		$this->load->view('guest/cetak_katalog', $data, FALSE);
	}
}