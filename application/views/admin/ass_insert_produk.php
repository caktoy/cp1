<div class="page-header">
	<h1>
		Produk<br>
		<small>tambah produk baru</small>
	</h1>
</div>
<?php
if ($this->session->flashdata('error')){
	echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
	echo "<button type='button' class='close' data-dismiss='alert'>";
	echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
	echo $this->session->flashdata('error');
	echo "</div>";
}
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/produk/simpan';?>" 
	enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Produk</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Produk">
		</div>
	</div>
	<div class="form-group">
		<label for="inputGambar" class="control-label col-sm-2">Gambar</label>
		<div class="col-lg-6">
			<div class="input-group">
				<input type="hidden" value="<?php echo $id_gambar; ?>" name="txtIdGambar">
				<input type="file" name="gambar" size="50"><small><em>Ukuran maksimal 2MB</em></small>
				<!--<input type="text" id="inputGambar" name="txtGambar" class="form-control" placeholder="Gambar">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-folder-open"></span></button>
				</span>-->
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div>
	<div class="form-group">
		<label for="inputDeskripsi" class="control-label col-sm-2">Deskripsi</label>
		<div class="col-sm-10">
			<textarea id="inputDeskripsi" name="txtDeskripsi" class="ckeditor" placeholder="Tulis disini..." ></textarea>
		</div>
	</div>
	
	<legend><small>Search Engine Optimizer (SEO)</small></legend>
	<input type="hidden" value="<?php echo $id_meta; ?>" name="txtIdMeta">
	<div class="form-group">
		<label for="inputKeyword" class="control-label col-sm-2">Keywords</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputKeyword" name="txtKeyword" 
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
			</a>
		</div>
	</div>
</form>