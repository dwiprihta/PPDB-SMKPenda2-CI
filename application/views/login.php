<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PSB</title>

	<!-- Global stylesheets -->
  <!-- css -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    

	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo base_url() ?>assets/css/color/red.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="<?php echo base_url() ?>assets/css/color/red.css" rel="stylesheet">

  <!-- Core JavaScript Files -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>  
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <!-- Core JavaScript Files -->
    
    <!-- =======================================================
        Theme Name: dwi prihta
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body bgcolor="orange">
	
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<h5 style="font-size: 14; font-family: arial;"><marquee><strong>Selamat Datang Di SIPUDES(Sistem Informasi Pusat Data Desa) Kabupaten </strong></marquee></h3>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="col-md-3 padding-0" style="margin-top:90px; margin-left: 570px">
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<form action="<?php echo base_url('login/cek_login'); ?>" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div ><img src="../assets/images/download.png" style="width:100px; height: 100px; margin-bottom: 60px;"></div>
								<h5 class="content-group">LOGIN ADMINISTRASI PPDB</h5>
							</div>
							<?=$this->session->flashdata('notif')?>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-warning btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>
						</div>
					</form>
					<div class="footer text-muted">
						&copy; 2016. <a href="http://www.muhajirulfaqih.blogspot.com" target="blank">Dwi prihtapambudi</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</div>

</body>
</html>
