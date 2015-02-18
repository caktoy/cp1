<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<div class="judul">Artikel dan Berita</div>
			<div class="isi">
				<?php
				if (empty($berita)) {
					echo "<div><em>Tidak ada data yang ditampilkan</em></div>";
				}
				else{
					foreach ($berita as $value) {
						setlocale (LC_TIME, 'id_ID');

						$id_berita = $value['id_berita'];
						$judul_berita = $value['judul_berita'];
						$tgl_berita = strftime('%A, %d %B %Y', strtotime($value['tanggal_berita']));
						$isi_berita = $value['isi_berita'];

						echo "<div class='list-berita'>";
						echo anchor('page/detil_berita/'.$id_berita, $judul_berita.'<br>', array('class' => 'judul-berita'));
						//echo "<a href='#' class='judul-berita'>".$judul_berita."</a><br>"; 
						echo "<small>".$tgl_berita."</small>";
						echo substr($isi_berita, 0, 250)."... ";
						echo anchor('page/detil_berita/'.$id_berita, '<small>[baca selengkapnya]</small>', '');
						//echo "<a href='#'>";
						//echo "<small>[baca selengkapnya]</small></a>";
						echo "</div>";
					}
					echo "<div class='list-agenda see-more'>";
					echo anchor('page/berita', '&bull;&bull;&bull;', array('title' => 'Lihat Lainnya', 'class' => 'isi-text'));
					//echo "<a href='#' title='Lihat Lainnya' class='isi-text'></a>";
					echo "</div>";
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">	
		<?php $this->load->view($panel); ?>			
	</div>
</div>