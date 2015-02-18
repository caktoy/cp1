<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $judul ?> - Dashboard</title>
	<!-- Meta -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/ava-alternative.png">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flick/jquery-ui-1.9.2.custom.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Dashboard</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="<?php if ($this->uri->segment(2)=='') echo $aktif; ?>">
						<a href="<?php echo base_url().'index.php/admin/'; ?>">
						<span class="glyphicon glyphicon-home"></span> Beranda</a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='user') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/pengaturan">
						<span class="glyphicon glyphicon-cog"></span> Pengaturan</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#modalLogout">
							<span class="glyphicon glyphicon-log-out"></span> Keluar
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="<?php if ($this->uri->segment(2)=='') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/">Beranda
						<span class="glyphicon glyphicon-home pull-right"></span></a>
					</li>
				</ul>
				<!-- Start of Admin Menu -->
				<ul class="nav nav-sidebar">
					<li class="<?php if ($this->uri->segment(2)=='agenda') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/agenda">Agenda
						<span class="glyphicon glyphicon-calendar pull-right"></span></a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='berita') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/berita">Berita
						<span class="glyphicon glyphicon-paperclip pull-right"></span></a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='layanan_jasa') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/layanan_jasa">Layanan dan Jasa
						<span class="glyphicon glyphicon-briefcase pull-right"></span></a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='produk') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/produk">Produk
						<span class="glyphicon glyphicon-tags pull-right"></span></a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='profil') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/profil">Profil Perusahaan
						<span class="glyphicon glyphicon-stats pull-right"></span></a>
					</li>
				</ul>
				<ul class="nav nav-sidebar">
					<li class="<?php if ($this->uri->segment(2)=='media') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/media">Media
						<span class="glyphicon glyphicon-camera pull-right"></span></a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='bantuan') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>index.php/admin/bantuan">Bantuan
						<span class="glyphicon glyphicon-question-sign pull-right"></span></a>
					</li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<?php $this->load->view($konten); ?>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Keluar</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Keluar Dari Dashboard</h4>
				</div>
				<div class="modal-body">
					Anda yakin ingin keluar dari dashboard? <br><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<a href="<?php echo base_url().'index.php/admin/logout'; ?>" class="btn btn-danger">Oke</a>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mine.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
</body>
</html>