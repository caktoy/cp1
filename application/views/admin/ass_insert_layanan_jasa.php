<div class="page-header">
	<h1>Layanan dan Jasa</h1>
</div>
<?php
if ($this->session->flashdata('success')){
	echo "<div class='alert alert-success alert-dismissible' role='alert'>";
	echo "<button type='button' class='close' data-dismiss='alert'>";
	echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
	echo $this->session->flashdata('success');
	echo "</div>";
}
if (!empty($layanan)) {
	$id_layanan = $layanan['id_layanan'];
	$nama_layanan = $layanan['nama_layanan'];
	$deskripsi_layanan = $layanan['deskripsi_layanan'];
	$id_meta = $layanan['id_meta'];
	$key_meta = $layanan['key_meta'];
	$desc_meta = $layanan['desc_meta'];
}
else{
	$id_layanan = "";
	$nama_layanan = "";
	$deskripsi_layanan = "";
	$id_meta = $this->mmeta->generateId();
	$key_meta = "";
	$desc_meta = "";
}
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/layanan_jasa/simpan'; ?>">
	<div class="row">
		<div class="col-sm-8">
			<input type="hidden" name="txtIdLayanan" value="<?php echo $id_layanan; ?>">
			<input type="text" class="form-control" name="txtNama" placeholder="Judul" value="<?php echo $nama_layanan; ?>"><br>
			<textarea name="txtDeskripsi" class="ckeditor" placeholder="Tulis disini..." >
				<?php echo $deskripsi_layanan; ?>
			</textarea><br>
		</div>
		<div class="col-sm-4">
			<legend><small>Search Engine Optimizer (SEO)</small></legend>
			<input type="hidden" name="txtIdMeta" value="<?php echo $id_meta; ?>">
			<input type="text" class="form-control" name="txtKeywords" placeholder="Kata Kunci" value="<?php echo $key_meta; ?>"><br>
		<textarea id="inputDesc" name="txtDesc" class="form-control" placeholder="Deskripsi"><?php echo $desc_meta; ?></textarea><br>
			<div class="form-group">
				<div class="col-sm-offset-0 col-sm-12">
					<button type="submit" class="btn btn-primary">
						<span class="glyphicon glyphicon-ok-sign"></span> Simpan
					</button>
					<button type="button" class="btn btn-default" onclick="kembali()">
						<span class="glyphicon glyphicon-remove-sign"></span> Batal
					</button>
				</div>
			</div>
		</div>
	</div>
</form>