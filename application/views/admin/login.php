<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $judul ?> - Dashboard Admin</title>
	<!-- Meta -->
	<link rel="shortcut icon" href="">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/signin.css">
</head>
<body>
  <div class="container">
<?php
if ($this->session->flashdata('gagal')){
  echo "<div class='alert alert-danger alert-dismissible' role='alert'>";
  echo "<button type='button' class='close' data-dismiss='alert'>";
  echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
  echo $this->session->flashdata('gagal');
  echo "</div>";
}
if ($this->session->flashdata('pesan')){
  echo "<div class='alert alert-success alert-dismissible' role='alert'>";
  echo "<button type='button' class='close' data-dismiss='alert'>";
  echo "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
  echo $this->session->flashdata('pesan');
  echo "</div>";
}
?>
    <form class="form-signin" role="form" method="post" action="<?php echo base_url().'index.php/admin/cek_login'; ?>">
      <h2 class="form-signin-heading">Mohon masuk terlebih dahulu.</h2>
      <input type="text" name="txtUsername" class="form-control" placeholder="Nama Pengguna" required autofocus>
      <input type="password" name="txtPassword" class="form-control" placeholder="Kata Kunci" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
    </form>

  </div> <!-- /container -->

	<!-- JavaScript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>
</html>