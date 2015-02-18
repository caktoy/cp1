<div class="page-header">
	<h1>
		Berita<br>
		<small>sunting berita</small>
	</h1>
</div>
<?php
if (!empty($berita)) {
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/berita/sunting'; ?>">
	<input type="hidden" name="txtId" value="<?php echo $berita['id_berita']; ?>">
	<div class="form-group">
		<label for="inputJudul" class="control-label col-sm-1">Judul</label>
		<div class="col-sm-11">
			<input type="text" class="form-control" id="inputJudul" name="txtJudul" placeholder="Judul Berita"
				value="<?php echo $berita['judul_berita']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputIsi" class="control-label col-sm-1">Isi</label>
		<div class="col-sm-11">
			<textarea id="inputIsi" name="txtIsi" class="ckeditor" placeholder="Tulis disini...">
				<?php echo $berita['isi_berita']; ?>
			</textarea>
		</div>
	</div>
	
	<legend><small>Search Engine Optimizer</small></legend>
	<div class="form-group">
		<input type="hidden" name="txtIdMeta" value="<?php echo $berita['id_meta']; ?>">
		<label for="inputKeyword" class="control-label col-sm-1">Keywords</label>
		<div class="col-sm-11">
			<input type="text" class="form-control" id="inputKeyword" name="txtKeyword" 
				placeholder="pisahkan dengan koma (,) untuk setiap kata kunci..." value="<?php echo $berita['key_meta']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDesc" class="control-label col-sm-1">Description</label>
		<div class="col-sm-11">
			<textarea id="inputDesc" name="txtDesc" class="form-control" placeholder="deskripsi..."><?php echo $berita['desc_meta']; ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-11">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-ok-sign"></span> Simpan
			</button>
			<button type="button" class="btn btn-default" onclick="kembali()">
				<span class="glyphicon glyphicon-remove-sign"></span> Batal
			</button>
		</div>
	</div>
</form>
<?php
}
else{
	echo "<div class='well'>";
	echo "Tidak ada data yang ditampilkan.";
	echo "</div>";
}
?>