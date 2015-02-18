<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($value='')
	{
		$masuk = $this->session->userdata('status');
		if ($masuk != 'masuk') {
			redirect('admin/login', 'refresh');
		}
		else{
			$data['judul'] = 'Beranda';
			$data['konten'] = 'admin/beranda';
			$data['aktif'] = 'active';
			$this->load->view('admin/index', $data, FALSE);
		}
	}

	public function berita($value='')
	{
		$data['judul'] = 'Berita';
		$data['konten'] = 'admin/berita';
		$data['aktif'] = 'active';
		$data['berita'] = $this->mberita->ambilData($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function produk()
	{
		$value = $this->input->post('txtCari');
		$data['judul'] = 'Produk';
		$data['konten'] = 'admin/produk';
		$data['aktif'] = 'active';
		$data['produk'] = $this->mproduk->ambilData($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function agenda($value='')
	{
		$data['judul'] = 'Agenda';
		$data['konten'] = 'admin/agenda';
		$data['aktif'] = 'active';
		$data['agenda'] = $this->magenda->ambilData($value);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function layanan_jasa($value='')
	{
		$data['judul'] = 'Layanan dan Jasa';
		$data['konten'] = 'admin/ass_insert_layanan_jasa';
		$data['aktif'] = 'active';
		//$data['layanan'] = $this->mlayanan_jasa->ambilData($value);
		$data['layanan'] = $this->mlayanan_jasa->getDataById(1);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function profil($value='')
	{
		$data['judul'] = 'Profil Perusahaan';
		$data['konten'] = 'admin/profil';
		$data['aktif'] = 'active';
		$data['id_meta'] = $this->mmeta->generateId();

		$profil = $this->mprofil->ambilData();
		$data['nama_perusahaan'] = $profil['nama_perusahaan'];
		$data['profil_perusahaan'] = $profil['profil_perusahaan'];
		$data['id_meta_old'] = $profil['id_meta'];
		$data['key_meta'] = $profil['key_meta'];
		$data['desc_meta'] = $profil['desc_meta'];

		$this->load->view('admin/index', $data, FALSE);
	}

	public function bantuan($value='')
	{
		$data['judul'] = 'Bantuan';
		$data['konten'] = 'admin/bantuan';
		$data['aktif'] = 'active';
		$this->load->view('admin/index', $data, FALSE);
	}

	public function login($value='')
	{
		$data['judul'] = 'Login';
		$this->load->view('admin/login', $data, FALSE);
	}

	public function cek_login()
	{
		$this->load->library('encrypt');
		$username = $this->input->post('txtUsername');
		$password = $this->input->post('txtPassword');
		$data = $this->muser->validasi($username, $password);
		if (count($data) > 0) {
			$item = array(
				'user_id' => $data['user_id'],
				'user_nama' => $data['user_nama'],
				'user_password' => $data['user_password'],
				'status' => 'masuk'
				);
			$this->session->set_userdata($item);
			redirect('admin', 'refresh');
		}
		else{
			$this->session->set_flashdata('gagal', '<strong>Gagal!</strong> Log in ditolak, silahkan coba lagi.');
			redirect('admin/login', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('pesan', '<strong>Terima kasih!</strong> Anda sudah keluar.');
		redirect('admin/login', 'refresh');
	}

	public function media()
	{
		$data['judul'] = 'Media';
		$data['konten'] = 'admin/media';
		$data['aktif'] = 'active';
		$data['media'] = $this->mgambar->getData();
		$this->load->view('admin/index', $data, FALSE);
	}

	public function pengaturan()
	{
		$data['judul'] = 'Pengaturan';
		$data['konten'] = 'admin/pengaturan';
		$data['aktif'] = 'active';
		$data['status'] = $this->session->userdata('status');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_nama'] = $this->session->userdata('user_nama');
		$data['user_password'] = $this->session->userdata('user_password');
		$this->load->view('admin/index', $data, FALSE);
	}

	public function simpan_pengaturan()
	{
		$id = $this->input->post('txtId');
		$nama = $this->input->post('txtNama');
		$password = $this->input->post('txtPass');

		$this->muser->perbarui($id, $nama, $password);

		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Pengaturan berhasil disimpan.');
		redirect('admin/pengaturan', 'refresh');
	}
}