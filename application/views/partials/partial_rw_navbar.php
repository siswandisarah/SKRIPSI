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
            <a href="" class="nav-link "></a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo site_url('/Rw/home')?>" class="nav-link "><b>Home</b></a>
          </li>

          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><b>Tambah Informasi</b></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo site_url('/Rw/informasi_pertanian')?>" class="dropdown-item">Informasi Pertanian</a></li>
              <li><a href="<?php echo site_url('/Rw/informasi_racun')?>" class="dropdown-item">Informasi Pestisida</a></li>
              <li><a href="<?php echo site_url('/Rw/informasi_pupuk')?>" class="dropdown-item">Informasi Pupuk</a></li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="<?php echo site_url('/Rw/proses_penanaman_dan_proses_panen/') ?>" class="nav-link"><b>Proses tanam dan panen</b></a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('/Rw/user/pengguna_aplikasi') ?>" class="nav-link"><b>Daftar Pengguna</b></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Rw/user/profile/') ?>" class="nav-link"><b>Lihat Profil</b></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('/Rw/user/changepassword') ?>" class="nav-link"><b>Ubah Password</b></a>
          </li>
      </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-bars"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"></span>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('registration/logout') ?>" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> keluar
              </a>
              
              
            </div>
          </li>
        </ul>
      </div>

  </div>
</div>
  <!-- /.navbar -->
