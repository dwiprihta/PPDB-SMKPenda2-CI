
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PSB SMK PENDA 2 KARANGANYAR</title>
	
    <!-- css -->
    
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    

	<!-- boxed bg -->
	<link id="bodybg" href="<?php echo base_url() ?>assets/css/bg3.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="<?php echo base_url() ?>assets/css/color/red.css" rel="stylesheet">

  <!-- Core JavaScript Files -->
    
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>  
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

    <!-- Core JavaScript Files -->
    
    <!-- =======================================================
        Theme Name: dwi prihta
        Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<!--HEADER ADDRES-->
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">
	<!-- NAVIGATION BAR 1-->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
					<!--<p class="bold text-left"><span class="glyphicon glyphicon-time"></span> <?php $tgl= date('d-M-y'); echo $tgl;?></p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right"> <span class="glyphicon glyphicon-phone"></span> Call us now +62 008 65 001</p>-->
          <MARQUEE><B>SISTEM PENERIMAAN SISWA BARU SMA TERKAPORIT SISTEM PENERIMAAN SISWA BARU SMA TERKAPORIT SISTEM PENERIMAAN SISWA BARU SMA TERKAPORIT</B></MARQUEE>
					</div>
				</div>
			</div>
		</div>
<!--HEADER ADDRES-->

<!-- NAVIGATION BAR-->
    <!--LOGO -->
        <div class="container navigation">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="glyphicon glyphicon-list"></i> </button>
                <a class="navbar-brand" href="index.html"><img src="../assets/images/logi.png" alt="" width="170" height="60" >
                </a>
        </div>
         <!--LOGO-->

       <!--AKUN VIEW-->
       <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			   <ul class="nav navbar-nav">
			     <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="btn btn-xs btn-success"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></div></a>
				      <ul class="dropdown-menu">
				          <li><a href="index.php"><span class='glyphicon glyphicon-user' aria-hidden='true'><b> Profil</b></span></a></li>
					      <li><a href="input_mahasiswa.php"><span class="glyphicon glyphicon-asterisk"><b> Setting</b></span></a></li>

					      <li><a href="<?php echo base_url().'admin/tampil_admin'?>"><span class='glyphicon glyphicon-list' aria-hidden='true'><b> Pengguna</b></span></a></li>

					      <li><a href=""><span class='glyphicon glyphicon-share' aria-hidden='true'><b> Log-Out</b></span></a></li>
                </ul>
			    </ul>
		</div>
		<!--AKUN VIEW-->

        <!--MENU UTAMA-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">

			     <!--1-->
				<li class="active"><a href="<?php echo base_url().'admin/index'?>"><span class='glyphicon glyphicon-home' aria-hidden='true'><b> Beranda</b></span></a></li>

                 <!--2-->
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"><b> Siswa</b></span><b class="caret"></b></a>
				<ul class="dropdown-menu">
				    <li><a href="<?php echo base_url().'Calon_mahasiswa/siswa';?>"><span class='glyphicon glyphicon-user' aria-hidden='true'><b> Data Siswa</b></span></a>
                   </li>     
					<li><a href="<?php echo base_url().'Calon_mahasiswa/add';?>"><span class="glyphicon glyphicon-upload"><b> Input Siswa</b></span></a></li>
				  </ul>
               
                <!--4-->
                 <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-bookmark' aria-hidden='true'><b> Artikel</b><b class="caret"></b></span></a>
				  <ul class="dropdown-menu">     
					<li><a href="input_mahasiswa.php"><span class="glyphicon glyphicon-list"><b> Pengumuman </b></span></a></li>
					<li><a href="input_mahasiswa.php"><span class="glyphicon glyphicon-inbox"><b> Event </b></span></a></li>
				  
          <li><a href="input_mahasiswa.php"><span class="glyphicon glyphicon-phone"><b> Kontak </b></span></a></li>
          </ul>
                   
                <!--5-->
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"><b> Master Data</b></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('admin/jurusan');?>"><span class='glyphicon glyphicon-user' aria-hidden='true'><b> Data Jurusan</b></span></a>
                   </li>     
          <li><a href="input_mahasiswa.php"><b> <!--BISA TAMBAH MENU DISINI--></b></span></a></li>
          </ul>

                 <!--7-->
				  <li><a href="<?php echo base_url().'laporanpdf/index';?>"><span class='glyphicon glyphicon-print' aria-hidden='true'><b> REPORT</b></span></a></li>

				 <!--6-->
				  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-pencil' aria-hidden='true'><b> User</b><b class="caret"></b></span></a>
				<ul class="dropdown-menu">
				    <li><a href="index.php"><span class='glyphicon glyphicon-user' aria-hidden='true'><b> Data User</b></span></a>
                   </li>     
					<li><a href="input_mahasiswa.php"><span class="glyphicon glyphicon-upload"><b> Input User</b></span></a></li>
				  </ul>
                
			  </ul>
            </div>
            <!--MENU UTAMA-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
h











    <!--FOOTER-->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="wow fadeInLeft" data-wow-delay="0.1s">
          <div class="text-left">
          <p>&copy;Copyright - Medicio Theme. All rights reserved.</p>
          </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="wow fadeInRight" data-wow-delay="0.1s">
          <div class="text-right">
            <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
          </div>
          </div>
        </div>
      </div>  
    </div>  
  </footer>


<!--FOOTER-->

    <!--SCROOL-->	
<a href="#" class="scrollup"><i class="glyphicon glyphicon-move"></i></a>
<!--SCROOL-->

    <!--INI KONTENT SCRIT PHP-->
	
    </div>
</body>
</html>