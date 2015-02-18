<div class="page-header">
	<h1>
		Berita<br>
		<small>sunting berita</small>
	</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="">
	<input type="hidden" name="txtId" value="">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Layanan / Jasa</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Produk">
		</div>
	</div>
	<div class="form-group">
		<label for="inputGambar" class="control-label col-sm-2">Gambar</label>
		<div class="col-lg-6">
			<div class="input-group">
				<input type="text" id="inputGambar" name="txtGambar" class="form-control" placeholder="Gambar">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-folder-open"></span></button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div>
	<div class="form-group">
		<label for="inputDeskripsi" class="control-label col-sm-2">Deskripsi</label>
		<div class="col-sm-10">
			<textarea id="inputDeskripsi" name="txtDeskripsi" class="ckeditor" placeholder="Tulis disini..." ></textarea>
		</div>
	</div>
	
	<legend><small>Search Engine Optimizer</small></legend>
	<div class="form-group">
		<label for="inputKeyword" class="control-label col-sm-2">Keywords</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputKeyword" name="txtKeywoard" 
				placeholder="pisahkan dengan koma (,) untuk setiap kata kunci...">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDesc" class="control-label col-sm-2">Description</label>
		<div class="col-sm-10">
			<textarea id="inputDesc" name="txtDesc" class="form-control" 
				placeholder="deskripsi..."></textarea>
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