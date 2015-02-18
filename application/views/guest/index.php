<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
		echo meta('description', $desc);
		echo meta('keywords', $keywords);
	?>
	<title><?php echo $judul; ?> - Company Profile</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mystyle.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flick/jquery-ui-1.9.2.custom.css">
</head>
<body class="body">
	<!-- Start of Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>" title="CV. Lancar Jaya">
				<img src="<?php echo base_url().'assets/img/logo-org.png'; ?>" alt="CV. Lancar Jaya" width="90%" class="img-logo">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="<?php if ($this->uri->segment(2)=='') echo $aktif; ?>">
						<a href="<?php echo base_url(); ?>">
						<span class="glyphicon glyphicon-home"></span> Beranda</a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='produk') echo $aktif; ?>">
						<a href="<?php echo base_url().'index.php/page/produk'; ?>">
						<span class="glyphicon glyphicon-tags"></span> Produk</a>
					</li>
					<li class="<?php if ($this->uri->segment(2)=='layanan') echo $aktif; ?>">
						<a href="<?php echo base_url().'index.php/page/layanan'; ?>">
						<span class="glyphicon glyphicon-globe"></span> Layanan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Start of Navbar -->

	<!-- Start of Content -->
	<div class="container content">
		<div class="col-md-12">
			<!-- Start of Header -->
			<?php $this->load->view($header); ?>
			<!-- End of Header -->

			<!-- Start of Content-->
			<div class="konten">
				<?php $this->load->view($konten); ?>
			</div>
			<!--End of Content-->
		</div>
	</div>
	<!-- End of Content -->

	<!-- Start of Footer -->
	<?php $this->load->view($footer); ?>
	<!-- End of Footer -->

	<!-- JavaScript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mine.js"></script>
	<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
</body>
</html>