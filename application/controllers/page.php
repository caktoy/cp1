<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* @author Thony Hermawan
*/
class Page extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index($value='')
	{
		$data['judul'] = "Beranda";
		$data['aktif'] = "active";
		$data['keywords'] = "lancar jaya, industri, besi, logam.";
		$data['desc'] = "CV. Lancar Jaya adalah perusahaan yang bergerak dibidang industri pengolahan besi dan logam.";
		$data['header'] = 'guest/header';
		$data['footer'] = 'guest/footer';
		$data['konten'] = 'guest/beranda';
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop5();
		$data['berita'] = $this->mberita->getTop3();
		$this->load->view('guest/index', $data, FALSE);
	}

	public function layanan()
	{
		$data_layanan = $this->mlayanan_jasa->getData();

		$data['judul'] = "Layanan dan Jasa";
		$data['aktif'] = "active";
		$data['nama_layanan'] = $data_layanan['nama_layanan'];
		$data['deskripsi_layanan'] = $data_layanan['deskripsi_layanan'];
		$data['keywords'] = $data_layanan['key_meta'];
		$data['desc'] = $data_layanan['desc_meta'];
		$data['header'] = "guest/header";
		$data['konten'] = "guest/layanan";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		$this->load->view('guest/index', $data, FALSE);
	}

	public function profil()
	{
		$data_profil = $this->mprofil->ambilData();

		$data['nama_perusahaan'] = $data_profil['nama_perusahaan'];
		$data['profil_perusahaan'] = $data_profil['profil_perusahaan'];
		$data['keywords'] = $data_profil['key_meta'];
		$data['desc'] = $data_profil['desc_meta'];

		$data['judul'] = "Profil Perusahaan";
		$data['aktif'] = "active";
		$data['header'] = "guest/header";
		$data['konten'] = "guest/profil";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		$this->load->view('guest/index', $data, FALSE);
	}

	public function produk($id=NULL)
	{
		$num_row = $this->db->get('produk');

		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'index.php/page/produk';
		$config['total_rows'] = $num_row->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 9;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		 
		$config['first_link'] = '&larr;';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = '&rarr;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		
		$data['paging'] = $this->pagination->create_links();
		$data['judul'] = "Katalog Produk";
		$data['aktif'] = "active";
		$data['keywords'] = "katalog, produk, besi, logam, lancar jaya, industri besi dan logam.";
		$data['desc'] = "Katalog produk CV. Lancar Jaya.";
		$data['header'] = "guest/header";
		$data['konten'] = "guest/kat_produk";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		$data['list_produk'] = $this->mproduk->ambilData('', $config['per_page'], $id);
		$this->load->view('guest/index', $data, FALSE);
	}

	public function detil_produk($value)
	{
		$d_produk = $this->mproduk->getDataById($value);
		$data['id_produk'] = $d_produk['id_produk'];
		$data['nama_produk'] = $d_produk['nama_produk'];
		$data['deskripsi_produk'] = $d_produk['deskripsi_produk'];
		$data['isi_gambar'] = $d_produk['isi_gambar'];

		$data['judul'] = "Detil Produk ".$d_produk['nama_produk'];
		$data['aktif'] = "active";
		$data['keywords'] = $d_produk['key_meta'];
		$data['desc'] = $d_produk['desc_meta'];
		$data['header'] = "guest/header";
		$data['konten'] = "guest/det_produk";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		
		$this->load->view('guest/index', $data, FALSE);
	}

	public function berita($id=NULL)
	{
		$num_row = $this->db->get('berita');

		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'index.php/page/produk';
		$config['total_rows'] = $num_row->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 9;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		 
		$config['first_link'] = '&larr;';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = '&rarr;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		
		$data['paging'] = $this->pagination->create_links();
		$data['judul'] = "Katalog Produk";
		$data['aktif'] = "active";
		$data['keywords'] = "katalog, produk, besi, logam, lancar jaya, industri besi dan logam.";
		$data['desc'] = "Katalog produk CV. Lancar Jaya.";
		$data['header'] = "guest/header";
		$data['konten'] = "guest/berita";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		$data['berita'] = $this->mberita->ambilData('', $config['per_page'], $id);
		$this->load->view('guest/index', $data, FALSE);
	}

	public function detil_berita($value)
	{
		$d_berita = $this->mberita->getDataById($value);
		$data['id_berita'] = $d_berita['id_berita'];
		$data['judul_berita'] = $d_berita['judul_berita'];
		$data['tanggal_berita'] = $d_berita['tanggal_berita'];
		$data['isi_berita'] = $d_berita['isi_berita'];

		$data['judul'] = $d_berita['judul_berita'];
		$data['aktif'] = "active";
		$data['keywords'] = $d_berita['key_meta'];
		$data['desc'] = $d_berita['desc_meta'];
		$data['header'] = "guest/header";
		$data['konten'] = "guest/det_berita";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();
		
		$this->load->view('guest/index', $data, FALSE);
	}

	public function cari()
	{
		$value = $this->input->post('txtCari');
		$data['keywords'] = "pencarian, lancar jaya, industri besi dan logam";
		$data['desc'] = "CV. Lancar Jaya adalah perusahaan yang bergerak dibidang industri pengolahan besi dan logam.";
		$data['berita'] = $this->mberita->ambilData($value, NULL, NULL);
		$data['judul'] = "Pencarian";
		$data['header'] = "guest/header";
		$data['konten'] = "guest/pencarian";
		$data['footer'] = "guest/footer";
		$data['panel'] = "guest/panel";
		$data['agenda'] = $this->magenda->get7Days();
		$data['produk'] = $this->mproduk->getTop3();

		$this->load->view('guest/index', $data, FALSE);
	}
}