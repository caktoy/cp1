<?php
if (count($produk)>0) {
	//foreach ($produk as $value) {
		//$id_produk = $value['id_produk'];
		//$nama_produk = $value['nama_produk'];
		//$deskripsi_produk = $value['deskripsi_produk'];
		//$id_meta = $value['id_meta'];
		//$key_meta = $value['key_meta'];
		//$desc_meta = $value['desc_meta'];
		//$id_gambar = $value['id_gambar'];
		//$isi_gambar = $value['isi_gambar'];
	//}
?>
<div class="page-header">
	<h1>
		Produk<br>
		<small>Detil produk <?php echo $nama_produk; ?></small>
	</h1>
</div>
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
	</div>
	<div class="col-md-8 col-xs-8">
		<legend>Detil Produk</legend>
		<h5><em>Nama Produk</em></h5>
		<strong><?php echo $nama_produk; ?></strong>
		<h5><em>Deskripsi</em></h5>
		<?php echo $deskripsi_produk; ?>
		<button type="button" class="btn btn-default" onclick="kembali()">
			<span class="glyphicon glyphicon-chevron-left"></span> Kembali
		</button>
		<button type="button" class="btn btn-primary">
			<span class="glyphicon glyphicon-print"></span> Cetak
		</button>
	</div>
</div>
<?php
}
else
	echo "<div class='well'>Tidak ada data yang ditampilkan.</div>";
?>