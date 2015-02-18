<div class="page-header">
	<h1>
		Produk<br>
		<small>ubah produk</small>
	</h1>
</div>
<?php
if (count($produk)>0) {
	/*foreach ($produk as $value) {
		$id_produk = $value['id_produk'];
		$nama_produk = $value['nama_produk'];
		$deskripsi_produk = $value['deskripsi_produk'];
		$id_meta = $value['id_meta'];
		$key_meta = $value['key_meta'];
		$desc_meta = $value['desc_meta'];
		$id_gambar = $value['id_gambar'];
		$isi_gambar = $value['isi_gambar'];
	}*/
?>
<?php if ($this->session->flashdata('error')){
	echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
	echo "<button type='button' class='close' data-dismiss='alert'>";
	echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
	echo $this->session->flashdata('error');
	echo "</div>";
}
?>
<div class="row">
	<div class="col-md-4 col-xs-4">
		<legend>Gambar</legend>
		<a href="#" class="thumbnail">
			<img src="<?php echo base_url().'assets/img/produk/'.$isi_gambar ?>" alt="<?php echo $nama_produk; ?>">
		</a>
		<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/produk/ubah_gambar'; ?>">
			<input type="hidden" name="txtIdGambar" value="<?php echo $id_gambar; ?>">
			<input type="hidden" name="txtIsiGambar" value="<?php echo $isi_gambar; ?>">
			<input type="hidden" name="txtIdProdukGambar" value="<?php echo $id_produk; ?>">
			<div class="form-group">
				<label for="inputGambar" class="control-label col-sm-2">Ubah</label>
				<div class="col-sm-2">
					<input type="file" id="inputGambar" name="gambar" size="20">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-1">
					<button type="submit" class="btn btn-primary btn-xs">Ubah Gambar
					</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-8 col-xs-8">
		<legend>Detil Produk</legend>
		<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/produk/ubah'; ?>">
			<input type="hidden" name="txtIdProduk" value="<?php echo $id_produk; ?>">
			<input type="hidden" name="txtIdMeta" value="<?php echo $id_meta; ?>">
			<div class="form-group">
				<label for="inputNama" class="control-label col-sm-2">Nama</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Produk" 
						value="<?php echo $nama_produk; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputDeskripsi" class="control-label col-sm-2">Deskripsi</label>
				<div class="col-sm-10">
					<textarea id="inputDeskripsi" name="txtDeskripsi" class="ckeditor" placeholder="Tulis disini...">
						<?php echo $deskripsi_produk ?>
					</textarea>
				</div>
			</div>

			<legend><small>Search Engine Optimizer</small></legend>
			<input type="hidden" value="<?php echo $id_meta; ?>" name="txtIdMeta">
			<div class="form-group">
				<label for="inputKeyword" class="control-label col-sm-2">Keywords</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputKeyword" name="txtKeyword" 
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
	</div>
</div>
<?php
}
else
	echo "<div class='well'>Tidak ada data yang ditampilkan.</div>";
?>