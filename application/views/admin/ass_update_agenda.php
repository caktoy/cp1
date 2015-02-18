<div class="page-header">
	<h1>
		Agenda<br>
		<small>ubah agenda</small>
	</h1>
</div>
<?php
foreach ($agenda as $value) {
	$id_agenda = $value['id_agenda'];
	$tgl_agenda = $value['tgl_agenda'];
	$nama_agenda = $value['nama_agenda'];
	$ket_agenda = $value['ket_agenda'];

	$tgl = date('d M Y', strtotime($tgl_agenda));
}
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/agenda/ubah'; ?>">
	<input type="hidden" name="txtId" value="<?php echo $id_agenda; ?>">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Agenda</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Agenda" 
				value="<?php echo $nama_agenda; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputTgl" class="control-label col-sm-2">Tanggal</label>
		<div class="col-sm-4">
			<input type="text" class="form-control datepicker" id="inputTgl" name="txtTgl" placeholder="Tanggal" 
				value="<?php echo $tgl; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDeskripsi" class="control-label col-sm-2">Keterangan</label>
		<div class="col-sm-10">
			<textarea id="inputDeskripsi" name="txtKeterangan" placeholder="Tulis disini..." 
				rows="5" cols="100"><?php echo $ket_agenda; ?>
			</textarea>
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