﻿<?php 
include 'konek.php';
//jika belum login harus login dulu
if(empty($_SESSION['id_pengguna'])){
  echo "<script>alert('login dulu bosku');</script>";
  echo "<script>window.location='login.php';</script>";
}

//jika ada aksi logout dia keluar
if(isset($_GET['aksi'])){
    if($_GET['aksi']=='logout'){
      $pengguna->logout_admin();
      echo "<script>alert('terima kasih bosku');</script>";
      echo "<script>window.location='login.php';</script>";
    }
}

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dinusfest</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Administrator</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Muhammad Ilham Firmansyah <a href="index.php?aksi=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=berita"><i class="fa fa-desktop fa-3x"></i>Berita</a>
                    </li>	
                    <li>
                        <a  href="index.php?halaman=bukutamu"><i class="fa fa-desktop fa-3x"></i>Buku Tamu</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=user"><i class="fa fa-desktop fa-3x"></i>Users</a>
                    </li> 
                    <li>
                        <a  href="index.php?halaman=kategori"><i class="fa fa-desktop fa-3x"></i>Kategori</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                    if(isset($_GET['halaman'])){

                    if ($_GET['halaman']=='berita') {
                        include 'berita.php';
                    }elseif ($_GET['halaman']=='bukutamu') {
                        include 'bukutamu.php';
                    }elseif ($_GET['halaman']=='user') {
                        include 'user.php';
                    }elseif ($_GET['halaman']=='kategori') {
                        include 'kategori.php';
                    }elseif ($_GET['halaman']=='tambahberita') {
                      include 'tambahberita.php';
                    }elseif ($_GET['halaman']=='ubahberita') {
                      include 'ubahberita.php';
                    }elseif ($_GET['halaman']=='ubahuser') {
                      include 'ubahuser.php';
                    }elseif ($_GET['halaman']=='ubahbukutamu') {
                      include 'ubahbukutamu.php';
                    }
                    }
                    else{
                        include 'home.php';
                    }

                 ?>

            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
