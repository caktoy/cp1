<div class="page-header">
	<h1>
		Pengaturan<br>
		<small>pengaturan pengguna</small>
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
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'index.php/admin/simpan_pengaturan'; ?>">
	<input type="hidden" name="txtId" value="<?php echo $user_id; ?>">
	<div class="form-group">
		<label for="inputNama" class="control-label col-sm-2">Nama Pengguna</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="inputNama" name="txtNama" placeholder="Nama Pengguna" 
				value="<?php echo $user_nama ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPass" class="control-label col-sm-2">Kata Kunci</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" id="inputPass" name="txtPass" placeholder="Kata Kunci" 
				value="<?php echo $user_password ?>">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Simpan</button>
		</div>
	</div>
</form>