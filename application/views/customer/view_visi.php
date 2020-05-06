<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Visi Misi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template//jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <!------ Include the above in your HEAD tag ---------->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <b>
      <p><h5><i>Selamat Datang Di Websita Pertanian Bolaang Mongondow</i></h5> </p>
        </b>
      </li>
    </ul>

   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-bars"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"></span>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('login/') ?>" class="dropdown-item">
          <i class="fas fa-sign-in-alt"></i>login
          </a>
         
        </div>
      </li>
         
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary  elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open">
          <a href="#">    
              <p>
                
                <h1>
                Welcome
                </h1>
              </p>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('Pertanian_Bolaang_mongondow/Home')?>" class="nav-link active">
                <b>
                  <p>Home</p>
                </b>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url('Pertanian_Bolaang_mongondow/Visi_Misi')?>" class="nav-link active">
                <b> 
                <p>
                    Visi Misi
                  </p>
                  </b>
                </a>
              </li>
             
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link" >
              <b>
              <p>
                PILIH KECEMATAN
                <i class="fas fa-angle-left right"></i>
              </p>
              </b>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_poigar'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamantan Poigar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_dumoga_barat'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Dumoga Barat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_dumoga_timur'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Dumoga Timur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_dumoga_utara'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Dumoga Utara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Lolak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_lolayan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Lolayan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_passi_barat'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Passi Barat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Pertanian_Bolaang_mongondow/Home/kecamatan_bolaang'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamantan Bolaang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Passi Timur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan Sangtombolang</p>
                </a>
              </li>
             
            </ul>
          </li>

          
         
          <li class="nav-item">
            <a href="<?php echo site_url('Pertanian_Bolaang_mongondow/Racun_hama')?>" class="nav-link active">
            <b>
              <p>
                Jenis Spektisida
              </p>
            </b>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('Pertanian_Bolaang_mongondow/pupuk')?>" class="nav-link active">
            <b>
              <p>
              Jenis-jenis Pupuk
              </p>
            </b>
            </a>           
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('Pertanian_Bolaang_mongondow/Proses_tanam_dan_panen')?>" class="nav-link active">
            <b>
              <p>
                 Lihat Proses Tanam/Panen
              </p>
            </b>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('login/')?>" class="nav-link active">
            <i class="fas fa-sign-in-alt"></i>
              <b>
              <p>
                Login           
              </p>
              </b>
            </a>
          </li>
          
        
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div style="margin: 20px;">
	  <h3><strong>Visi Dan Misi</strong></h3>
	  <h4><strong> PEMERINTAH KABUPATEN BOLAANG MONGONDOW</strong></h4>
  </div>
  
  <div class="panel panel-success" style="margin: 20px;">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>VISI</strong></h3>
		</div>
		<div class="panel-body">
			<div style='text-align:center;'>
			  <p> Visi dan Misi adalah pandangan yang melahirkan cita-cita sebagai acuan yang akan dicapai dalam 
			  pelaksanaan pembangunan di Kabupaten Bolaang Mongondow.</p>
			  <p>Berdasarkan hal-hal yang telah dijelaskan sebelumnya serta memperhatikan kondisi obyektif Kabupaten
			  Bolaang Mongondow dan dikaitkan dengan isu pembangunan pada masa sekarang dan masa yang akan datang, maka kami 
			  merumuskan Visi Kabupaten Bolaang Mongondow sebagia berikut :<br>
			  "MEWUJUDKAN BOLAANG MONGONDOW YANG BERBUDAYA, BERDAYA SAING DAN SEJAHTERA".</p>
			  </div>
			  <p> 1. BERBUDAYA, ARTINYA : terwujudnya masyarakat Bolaang Mongondow yang mempunyai budaya modern dan agamais serta berkepribadian yang dinamis,
			  kreatif, inovatif, disiplin, berdaya tahan dan mampu ikut mewarnai proses globalisasi.</p>
			  <p> 2.BERDAYA SAING, ARTINYA : terwujudnya masyarakat Bolaang Mongondow yang sehat dan cerdas dengan kemampuan untuk menjadi
			  unggul di segala bidang.</p>
			  <p> 3.SEJAHTERA, ARTINYA : terwujudnya masyarakat Bolaang Mongondow yang bebas dari segala macam gangguan agar dapat 
			  menjalani kehidupan yang aman, sentosa dan makmur.</p>
		</div>
	</div>
  
  

    <div class="panel panel-success" style="margin: 20px;">
		<div class="panel-heading">
			<h3 class="panel-title"><strong>MISI</strong></h3>
		</div>
		<div class="panel-body">
		
			<p> &#10148; mengembangkan suasana kondusif dalam mempraktikakn keimanan dan ketagwaan kepada Tuhan yang 
			  maha Esa dalam kehidupan sehari-hari.</p>
			  <p> &#10148; menerapkan Clean Government dan Good Governance yang bebas korupsi, kolusi, dan nepotisme.</p>
			  <p> &#10148; Mewujudkan kondisi aman, damai, nyaman, tertib dan disiplin.</p>
			  <p> &#10148; Menegakkan prinsip-prinsip demokrasi, supremasi, dan kepastian hukum, dan hak asasi manusia.</p>
			  <p> &#10148; Memberdayakan dan meningkatkan peran perempuan dan perlindungan anak.</p>
			  <p> &#10148; Mewujudkan masyarakat yang cerdas dan berdaya saing tinggi.</p>
			  <p> &#10148; Mengolah secara optimal sumber daya alam Bolaang Mongondow secara berkelanjutan dan pelestarian lingkungan hidup.</p>
			  <p> &#10148; Memberdayakan ekonomi lokal yang berbasis kerakyatan.</p>
			  <p> &#10148; Meningkatkan peran pelaku bisnis dalam kegiatan ekonomi lokal, regional, dan global.</p>
			  <p> &#10148; Meningkatkan pemanfaatan teknologi informasi dan komunikasi, dan menjamin kebebasan pers yang bertanggung jawab.</p>
			  <p> &#10148; Menurunkan penganguran, kemiskinan, dan mengurangi masalah-masalah sosial.</p>
		
		</div>
	</div>
			
  
  
   <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
   
<!-- ./wrapper -->
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>template/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>template/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
</body>
</html>
