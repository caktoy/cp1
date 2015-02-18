<div class="page-header">
	<h1>
		Berita<br>
		<small>tulis berita baru</small>
	</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/berita/simpan'; ?>">
	<div class="form-group">
		<label for="inputJudul" class="control-label col-sm-1">Judul</label>
		<div class="col-sm-11">
			<input type="text" class="form-control" id="inputJudul" name="txtJudul" placeholder="Judul Berita">
		</div>
	</div>
	<div class="form-group">
		<label for="inputIsi" class="control-label col-sm-1">Isi</label>
		<div class="col-sm-11">
			<textarea id="inputIsi" name="txtIsi" class="ckeditor" placeholder="Tulis disini..."></textarea>
		</div>
	</div>
	
	<legend><small>Search Engine Optimizer (SEO)</small></legend>
	<div class="form-group">
		<input type="hidden" name="txtIdMeta" value="<?php echo $id_meta; ?>">
		<label for="inputKeyword" class="control-label col-sm-1">Keywords</label>
		<div class="col-sm-11">
			<input type="text" class="form-control" id="inputKeyword" name="txtKeyword" 
				placeholder="pisahkan dengan koma (,) untuk setiap kata kunci...">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDesc" class="control-label col-sm-1">Description</label>
		<div class="col-sm-11">
			<textarea id="inputDesc" name="txtDesc" class="form-control" 
				placeholder="deskripsi..."></textarea>
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