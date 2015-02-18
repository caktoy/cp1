<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author Thony Hermawan
*/
class Profil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function simpan()
	{
		$nama = $this->input->post('txtNama');
		$profil = $this->input->post('txtProfil');
		$key = $this->input->post('txtKey');
		$desc = $this->input->post('txtDesc');
		$data_profil = $this->mprofil->ambilData();

		if (empty($data_profil)) {
			$meta = $this->input->post('txtIdMeta');
			$this->mmeta->insert($meta, null, $key, $desc);
			$this->mprofil->insert($nama, $profil, $meta);
		} else {
			$meta = $this->input->post('txtIdMetaOld');
			$this->mmeta->update($meta, $key, $desc);
			$this->mprofil->update('1', $nama, $profil);
		}

		$this->session->set_flashdata('success', '<strong>Berhasil!</strong> Profil berhasil diperbarui.');
		redirect('admin/profil', 'refresh');
	}

}