<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IRENT - Tempatnya Sewa Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="<?php echo base_url('assets/images/irent-logo.png')?>" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css') ?>">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  </head>
  
  <body> 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container nav-hide">
        <!-- <a class="navbar-brand" href="">irent</a> -->
        <div class="navbar-logo">
          <img class="img-navbar" src="<?php echo base_url('assets/images/irent-logo-3.2.png')?>" alt="" width="90px" height="40px">
        </div>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if($this->uri->segment(2) == '') echo 'active'?>"><a href="<?php echo site_url('/home')?>" class="nav-link">Beranda</a></li>
	          <li class="nav-item <?php if($this->uri->segment(2) == 'tentang') echo 'active'?>"><a href="<?php echo site_url('/home/tentang')?>" class="nav-link">Tentang Irent</a></li>
	          <li class="nav-item <?php if($this->uri->segment(2) == 'rentalkan') echo 'active'?>"><a href="<?php echo site_url('/home/rentalkan')?>" class="nav-link">Mulai Merentalkan</a></li>
            
            <?php if($this->session->userdata("log")=="Masuk"){
	            echo '<li class="nav-item"><a class="nav-link" href="'.site_url("/home/logout").'">Keluar</a></li>';
            } 
            else
	            echo '<li class="nav-item"><a class="nav-link" href="'.site_url("/home/login").'">Masuk</a></li>';
            ?>
	          
            <li class="nav-item"><a href="#ftco-section" class="nav-link icon-search2" style="font-size: 20px;"></a></li>
	        </ul>
        </div>
        

	    </div>
	  </nav>
    <!-- END nav -->
