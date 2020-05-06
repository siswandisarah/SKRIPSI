<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

   <title>Profile</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
     
       <!--  <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8"> -->
        <span class="brand-text font-weight-light"><h6><b>Halaman <br>RW(Rukun Warga)</b></h6></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo site_url('/admin/home')?>" class="nav-link "><b>Home</b></a>
          </li>

          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><b>Tambah Informasi</b></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo site_url('/admin/informasi_pertanian')?>" class="dropdown-item">informasi pertanian</a></li>
              <li><a href="<?php echo site_url('/admin/informasi_racun')?>" class="dropdown-item">informasi spetisida</a></li>
              <li><a href="<?php echo site_url('/admin/informasi_pupuk')?>" class="dropdown-item">Informasi Pupuk</a></li>
              
            </ul>
          </li>
      
         
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><b>cara produksi</b></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo site_url('/admin/proses_penanaman_dan_proses_panen/') ?>" class="dropdown-item">Add Proses Penanaman</a></li>
              <li><a href="<?php echo site_url('/admin/proses_pemupukan') ?>" class="dropdown-item">Add Proses pemupukan</a></li>             
            </ul>           
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('/admin/user/pengguna_aplikasi') ?>" class="nav-link"><b>Daftar Pengguna</b></a>
          </li>
         
         
		     
     
          
      
        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    


      <!-- Right navbar links -->
    
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!--  <h1 class="m-0 text-dark"> Top Navigation <small>Example 3.0</small></h1> -->
             <!--  <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
        <!-- </div> -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

     <h1>My Profile</h1>
    <section class="content">
   
     <table class="table">

     <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('/assets/foto/').$user['image']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
   
        <h5 class="card-title">nama : <?= $user['name']; ?></h5><br><br>
        <h5 class="card-title">kecamatan : <?= $user['kecamatan']; ?></h5><br><br>
        <h5 class="card-title">Kelurahan : <?= $user['kelurahan']; ?></h5><br><br>
        <h5 class="card-title">desa : <?= $user['desa']; ?></h5><br>     <br>
        <h5 class="card-title">dusun : <?= $user['dusun']; ?></h5><br><br>
        <p class="card-text"><?= $user['email']; ?></p><br>
        <p class="card-text"><small class="text-muted">mendaftar tanggal <?= date('d F Y', $user['date_created']);?> </small></p>
      </div>
    </div>
  </div>
</div>
   
         </table>
    </section>

 


  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->



    <!-- ini adalah tampilan tambah racun rumput ini batas-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside> 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    To the right
    <div class="float-right d-none d-sm-inline"> -->
     
    </div>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/dist/js/adminlte.min.js"></script>
</body>
</html>
