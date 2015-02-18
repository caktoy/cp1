<div class="page-header">
	<h1>
		Produk<br>
		<small>maintenance data produk</small>
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
<form class="form-inline" role="form" method="post" action="<?php echo base_url().'index.php/admin/produk'; ?>">
	<div class="form-group">
		<div class="btn-group">
			<a href="<?php echo base_url().'index.php/produk/tambah'; ?>" class="btn btn-default" title="Tambah Produk">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a href="#" class="btn btn-default" title="Urutkan Data" data-toggle="modal" data-target="#modalSort">
				<span class="glyphicon glyphicon-sort"></span>
			</a>
			<a href="#" class="btn btn-default" title="Hapus Semua" data-toggle="modal" data-target="#modalDeleteAll">
				<span class="glyphicon glyphicon-trash"></span>
			</a>
			<a href="<?php echo base_url().'index.php/produk/cetak_katalog'; ?>" class="btn btn-default" title="Buat Katalog" target="_blank">
				<span class="glyphicon glyphicon-book"></span> Buat Katalog
			</a>
		</div>
	</div>
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" id="inputCari" name="txtCari" placeholder="Cari">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Cari">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div><!-- /input-group -->
	</div>
</form>

<fieldset>
	<legend>Daftar Produk</legend>
	<table class="table table-hover">
		<thead>
			<tr>
				<th width="20px"><center>No.</center></th>
				<th><center>Nama</center></th>
				<th><center>Deskripsi</center></th>
				<th><center>Opsi</center></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if (count($produk) > 0) {
				$no = 1;
				foreach ($produk as $value) {
					echo "<tr>";
					echo "<td>".$no."</td>";
					echo "<td>".$value['nama_produk']."</td>";
					echo "<td>".substr($value['deskripsi_produk'], 0, 70)."</td>";
					echo "<td><center>";
					echo anchor('produk/detil_produk/'.$value['id_produk'], 
						'<span class="glyphicon glyphicon-eye-open"></span> Lihat', array('class'=>'btn btn-primary btn-xs'));
					echo nbs(1);
					echo anchor('produk/ubah_produk/'.$value['id_produk'], 
						'<span class="glyphicon glyphicon-edit"></span> Sunting', array('class'=>'btn btn-info btn-xs'));
					echo nbs(1);
					echo anchor('produk/hapus/'.$value['id_produk'].'/'.$value['id_meta'].'/'.$value['id_gambar'].'/'.$value['isi_gambar'], 
						'<span class="glyphicon glyphicon-remove"></span> Hapus', 
						array('class'=>'btn btn-danger btn-xs', 'onclick'=>"return confirm('Anda yakin ingin menghapusnya?')"));
					echo "</center></td>";
					echo "</tr>";

					$no++;
				}
			}else{
				echo "<tr><td colspan='5'>Tidak ada data yang ditampilkan.</td></tr>";
			}
			?>
		</tbody>
	</table>
</fieldset>

<!-- Modal -->
<div class="modal fade" id="modalSort" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form class="form-horizontal" role="form" method="post">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Keluar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Urutkan Data</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="inputSortBy" class="control-label col-sm-4">Urutkan Berdasarkan</label>
					<div class="col-sm-8">
						<select id="inputSortBy" class="form-control" name="cbSortBy" placeholder="Pilih salah satu...">
							<option>Kode</option>
							<option>Nama</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="inputOrder" class="control-label col-sm-4">Secara</label>
					<div class="col-sm-8">
						<div class="radio">
							<label>
								<input type="radio" id="inputOrder" name="rbOrder" value="asc">Ascending (A-Z)
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" id="inputOrder" name="rbOrder" value="desc">Descending (Z-A)
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="button" class="btn btn-primary">Oke</button>
			</div>
		</div>
	</div>
	</form>
</div>

<div class="modal fade" id="modalDeleteAll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Keluar</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Hapus Semua Data</h4>
			</div>
			<div class="modal-body">
				Anda yakin ingin menghapus semua data? <br><br>
				<small><em>Catatan: Tindakan ini tidak bisa Anda ulangi.</em></small>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a href="<?php echo base_url().'index.php/produk/hapus_semua'; ?>" class="btn btn-danger">Oke</a>
			</div>
		</div>
	</div>
</div>
