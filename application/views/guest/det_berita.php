<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<div class="judul"><?php echo $judul_berita; ?></div>
			<div class="isi">
				<small><?php echo $tanggal_berita; ?></small><br>
				<?php echo $isi_berita; ?>
				<button type="button" class="btn btn-default" onclick="kembali()">
					<span class="glyphicon glyphicon-chevron-left"></span> Kembali
				</button>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<?php $this->load->view($panel); ?>
	</div>
</div>