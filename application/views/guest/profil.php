<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<div class="judul"><?php echo $nama_perusahaan; ?></div>
			<div class="isi">
				<?php
					echo "<p>".$profil_perusahaan."</p>";
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<?php $this->load->view($panel); ?>
	</div>
</div>