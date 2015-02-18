<div class="page-header">
	<h1>
		Profil Perusahaan<br>
		<small>maintenance data profil perusahaan</small>
	</h1>
</div>
<?php
if ($this->session->flashdata('success')){
	echo "<div class='alert alert-success alert-dismissible' role='alert'>";
	echo "<button type='button' class='close' data-dismiss='alert'>";
	echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
	echo $this->session->flashdata('success');
	echo "</div>";
}
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/profil/simpan'; ?>">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Perusahaan</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Perusahaan" 
				value="<?php echo $nama_perusahaan; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputIsi" class="control-label col-sm-2">Profil Perusahaan</label>
		<div class="col-sm-10">
			<textarea id="inputIsi" name="txtProfil" class="ckeditor" placeholder="Tulis disini...">
				<?php echo $profil_perusahaan; ?>
			</textarea>
		</div>
	</div>
	
	<legend><small>Search Engine Optimizer (SEO)</small></legend>
	<input type="hidden" name="txtIdMeta" value="<?php echo $id_meta; ?>">
	<input type="hidden" name="txtIdMetaOld" value="<?php echo $id_meta_old; ?>">
	<div class="form-group">
		<label for="inputKeyword" class="control-label col-sm-2">Keywords</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputKeyword" name="txtKey" 
				placeholder="pisahkan dengan koma (,) untuk setiap kata kunci..." value="<?php echo $key_meta; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDesc" class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea id="inputDesc" name="txtDesc" class="form-control" 
				placeholder="deskripsi..."><?php echo $desc_meta; ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-ok-sign"></span> Simpan
			</button>
			<button type="button" class="btn btn-default" onclick="kembali()">
				<span class="glyphicon glyphicon-remove-sign"></span> Batal
			</button>
		</div>
	</div>
</form>
