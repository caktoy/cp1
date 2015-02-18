<div class="page-header">
	<h1>
		Agenda<br>
		<small>buat agenda baru</small>
	</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/agenda/simpan'; ?>">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Agenda</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Agenda">
		</div>
	</div>
	<div class="form-group">
		<label for="inputTgl" class="control-label col-sm-2">Tanggal</label>
		<div class="col-sm-4">
			<input type="text" class="form-control datepicker" id="inputTgl" name="txtTgl" placeholder="Tanggal">
		</div>
	</div>
	<div class="form-group">
		<label for="inputDeskripsi" class="control-label col-sm-2">Keterangan</label>
		<div class="col-sm-10">
			<textarea id="inputDeskripsi" name="txtKeterangan" placeholder="Tulis disini..." rows="5" cols="100"></textarea>
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