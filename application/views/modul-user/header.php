<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Museum Pos Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/logopos.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/logopos.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">


</head>

<body>
<?php foreach ($query as $a) {} ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="<?php echo site_url('home'); ?>"><span><?php echo $a['judul']; ?></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#sejarah">Sejarah</a></li>
          <li class="dropdown"><a href="#koleksi"><span>Koleksi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#koleksisejarah">Koleksi Sejarah</a></li>
              <li><a href="#prangko">Koleksi Prangko</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Pengelola</a></li>         
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="<?php echo site_url('reservasi'); ?>">Kunjungan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Beranda Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><?php echo $a['judul']; ?></h1>
          <h2><?php echo $a['deskripsi']; ?></h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?php echo base_url(); ?>admin/foto/<?php echo $a['gambar']; ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Beranda -->