<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<div class="judul"><?php echo $nama_produk; ?></div>
			<div class="isi">
				<?php
				$gambar_produk = array(
					'src' => base_url().'assets/img/produk/'.$isi_gambar,
					'alt' => $nama_produk,
					'class' => 'img-thumbnail',
					'width' => '400px'
				);
				echo "<center>".img($gambar_produk)."</center>";
				echo nbs(2);
				?>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama Produk</label>
						<div class="col-sm-9">
							<p class="form-control-static"><?php echo $nama_produk; ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<p class="form-control-static"><?php echo $deskripsi_produk; ?></p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="button" class="btn btn-default" onclick="kembali()">
								<span class="glyphicon glyphicon-chevron-left"></span> Kembali
							</button>
							<?php echo anchor('produk/cetak_produk/'.$id_produk, 
							'<span class="glyphicon glyphicon-file"></span> Simpan (PDF)', 
							array('class' => 'btn btn-primary', 'target' => '_blank')); ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<?php $this->load->view($panel); ?>
	</div>
</div>