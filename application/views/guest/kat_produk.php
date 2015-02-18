<div class="row">
	<div class="col-md-8">
		<div class="col-xs-12 box-beranda">
			<div class="judul">Katalog Produk</div>
			<div class="isi">
				<?php
				if (empty($list_produk)) {
					echo "<em>Tidak ada data yang ditampilkan</em>";
				}
				else {
					echo "<table>";
					foreach ($list_produk as $value) {
						$id_produk = $value['id_produk'];
						$nama_produk = $value['nama_produk'];
						$deskripsi_produk = substr($value['deskripsi_produk'], 0, 150);
						$isi_gambar = $value['isi_gambar'];

						$link_detil = base_url().'index.php/page/detil_produk/'.$id_produk;

						$gambar_produk = array(
							'src' => base_url().'assets/img/produk/'.$isi_gambar,
							'alt' => $nama_produk,
							'class' => 'img-rounded',
							'width' => '150',
						);
						echo "<tr>";
						echo "<td rowspan='3' class='img-produk'><a href='".$link_detil."' class='thumbnail'>".img($gambar_produk)."</a></td>";
						echo "<td class='nama-produk'><a href='".$link_detil."'>".$nama_produk."</a></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class='desk-produk'>".$deskripsi_produk."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class='opt-produk'>";
						echo "<a href='".$link_detil."' class='btn btn-primary btn-xs'>";
						echo "<span class='glyphicon glyphicon-eye-open'></span> Lihat Detil</a> ";
						echo anchor('produk/cetak_produk/'.$id_produk, 
							'<span class="glyphicon glyphicon-file"></span> Simpan (PDF)', 
							array('class' => 'btn btn-primary btn-xs', 'target' => '_blank'));
						//echo "<a href='#' class='btn btn-primary btn-xs'>";
						//echo "<span class='glyphicon glyphicon-file'></span> Simpan (PDF)</a>";
						echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				echo "<center>".$paging."</center>";
				?>
			</div>
		</div>
	</div>
	<div class="col-md-4 col-xs-12">
		<?php $this->load->view($panel); ?>
	</div>
</div>