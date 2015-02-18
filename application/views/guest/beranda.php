<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<?php include('carousel.php'); ?>
			<!--
			<div class="judul">Katalog Produk</div>
			<div class="isi">
				<?php
				/*if (empty($produk)) {
					echo "<div><em>Tidak ada data yang ditampilkan</em></div>";
				}
				else{
					foreach ($produk as $value) {
						$id_produk = $value['id_produk'];
						$nama_produk = $value['nama_produk'];
						$deskripsi_produk = $value['deskripsi_produk'];
						$isi_gambar = $value['isi_gambar'];

						$gambar_produk = array(
							'src' => base_url().'assets/img/produk/'.$isi_gambar,
							'alt' => $nama_produk,
							//'class' => 'img-thumbnail',
							'width' => '400px'
						);

						$link_detil = base_url().'index.php/page/detil_produk/'.$id_produk;

						echo "<div class='col-md-3 col-xs-3 ava-produk'>";
						echo "<a href='".$link_detil."' class='thumbnail' title='".$nama_produk."'>";
						echo img($gambar_produk);
						echo "</a>";
						echo "<div class='ava-produk-name'><a href='".$link_detil."'>".$nama_produk."</a></div>";
						echo "</div>";
					}
					?>
				<div class="col-md-3 col-xs-3 ava-produk">
					<a href="<?php echo base_url().'index.php/page/produk'; ?>" class="thumbnail" title="Lihat Lainnya">
						<img src="<?php echo base_url().'assets/img/Puzzle.png'; ?>" alt="Lihat Lainnya">
					</a>
					<div class="ava-produk-name"><a href="<?php echo base_url().'index.php/page/produk'; ?>">Lihat Lainnya</a></div>
				</div>
					<?php
				}*/
				?>
			</div>
			-->
		</div>
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
		<!--<div class="box-beranda">
			<div class="judul">Pencarian</div>
			<div class="isi">
				<form class="form" method="post" action="">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Ketik disini...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
		<div class="box-beranda">
			<div class="judul">Agenda</div>
			<div class="isi">
				<div class="box-agenda">
					<?php
					/*if (empty($agenda)) {
						echo "<em>Tidak ada data yang ditampilkan</em>";
					}
					else{
						foreach ($agenda as $value) {
							$id_agenda = $value['id_agenda'];
							$tgl_agenda = date("d M Y", strtotime($value['tgl_agenda']));
							$nama_agenda = $value['nama_agenda'];
							$ket_agenda = $value['ket_agenda'];

							echo "<div class='list-agenda'>";
							echo "<span class='list-tgl-agenda'>".$tgl_agenda."</span> ".$nama_agenda."<br>";
							echo $ket_agenda;
							echo "</div>";
						}
						echo "<div class='list-agenda see-more'>";
						echo "<a href='#' title='Lihat Lainnya' class='isi-text'>&bull;&bull;&bull;</a>";
						echo "</div>";
					}*/
					?>
				</div>
			</div>
		</div>-->
	</div>
</div>