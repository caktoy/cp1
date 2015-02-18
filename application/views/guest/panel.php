<div class="box-beranda">
	<div class="judul">Pencarian</div>
	<div class="isi">
		<form class="form" method="post" action="<?php echo base_url().'index.php/page/cari'; ?>">
			<div class="input-group">
				<input type="text" name="txtCari" class="form-control" placeholder="Ketik disini...">
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
	<div class="judul">Galeri Produk</div>
	<div class="isi">
		<?php
		if (empty($produk)) {
			echo "<em>Tidak ada data yang ditampilkan</em>";
		}
		else {
			echo "<table width='100%'>";
			foreach ($produk as $value) {
				$id_produk = $value['id_produk'];
				$nama_produk = $value['nama_produk'];
				$isi_gambar = $value['isi_gambar'];

				$link_detil = base_url().'index.php/page/detil_produk/'.$id_produk;

				$gambar_produk = array(
				          'src' => base_url().'assets/img/produk/'.$isi_gambar,
				          'alt' => $nama_produk,
				          'class' => 'img-thumbnail',
				          'width' => '80',
				);

				echo "<tr class='list-agenda'>";
				echo "<td>".img($gambar_produk)."</td>";
				echo "<td class='list-tgl-agenda'>".nbs(3).anchor('page/detil_produk/'.$id_produk, $nama_produk, '')."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<div class='list-agenda see-more'>";
			echo anchor('page/produk', '&bull;&bull;&bull;', array('class' => 'isi-text', 'title' => 'Lihat Lainnya'));
			//echo "<a href='' title='Lihat Lainnya' class='isi-text'>&bull;&bull;&bull;</a>";
			echo "</div>";
		}
		?>
	</div>
</div>
<div class="box-beranda">
	<div class="judul">Agenda</div>
	<div class="isi">
		<div class="box-agenda">
			<?php
			if (empty($agenda)) {
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
				//echo "<a href='#' title='Lihat Lainnya' class='isi-text'>&bull;&bull;&bull;</a>";
				echo "</div>";
			}
			?>
		</div>
	</div>
</div>