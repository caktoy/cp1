<div class="page-header">
	<h1>
		Media<br>
		<small>galeri gambar dan foto</small>
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

<!--<a href="#" class="btn btn-primary" title="Unggah Baru" data-toggle="modal" data-target="#modalUpload">
	<span class="glyphicon glyphicon-upload"></span> Unggah Baru
</a><br><br>-->

<?php
if (empty($media)) {
	echo "<em>Tidak ada data yang ditampilkan.</em>";
}else{
	foreach ($media as $value) {
		$id = $value['id_gambar'];
		$isi = $value['isi_gambar'];

		echo "<div class='col-md-3 col-xs-3'>";
		echo "<a href='#'' class='thumbnail'>";
		echo "<img src='".base_url()."assets/img/produk/".$isi."' alt='".$isi."'>";
		echo "</a>";
		echo "</div>";
	}
}
?>

<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form" role="form" method="post" action="">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Keluar</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Unggah Baru</h4>
				</div>
				<div class="modal-body">
					Silahkan pilih file yang akan Anda unggah.<br><br>
					<input type="file" size="20">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">
						<span class="glyphicon glyphicon-remove"></span> Batal
					</button>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> Unggah</button>
				</div>
			</div>
		</div>
	</form>
</div>