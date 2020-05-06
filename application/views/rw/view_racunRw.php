  <div class="content-wrapper" style="margin-left: 0;">
    <h3 class="text-center py-5">INFORMASI PESTISIDA</h3>
    <section class="content">
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
            <button class = "btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class ="fa fa-plus"></i> tambah data racun</button>
          </div>
          <div class="col-md-6">
            <!-- SEARCH FORM -->
            <form class="form-inline float-right">
              <div class="input-group input-group-sm">
              <form method="get" action = "<?php echo site_url().'Rw/informasi_racun'?>">
                <input class="form-control form-control-navbar" type="text" placeholder="Nama pestisida" aria-label="Search" name="keyword" id="keyword">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="keyword">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

     <table class="table">

          <tr>
              <th>No</th>
              <th>Nama racun</th>
              <th>fungsi Utama</th>
              <th>Tanggal</th>
              <th>Kecamatan</th>
              <th>Harga racun</th>

              <th>Pilih action</th>
          </tr>
          <?php
          $no= 1;

           foreach ($racun as $rcn): ?>
            <tr>
                  <td><?php echo $rcn['id']; ?></td>
                  <td><?php echo $rcn['nama_racun']; ?></td>
                  <td><?php echo $rcn['fungsi']; ?></td>
                  <td><?php echo $rcn['tanggal']; ?></td>
                  <td><?php echo $rcn['kecamatan']; ?></td>
                  <td><?php echo $rcn['harga_racun']; ?></td>

                  <td>

                  <a href="<?=base_url();?>/rw/informasi_racun/detail/<?=$rcn['id'];?>"   class ="btn btn-xs btn-success"><i class="fa fa-search-plus"></i></a>
                  <a href="<?=base_url();?>/rw/informasi_racun/hapus/<?=$rcn['id'];?>"   class ="btn btn-xs btn-danger" class = "btn btn-danger"><i class = "fa fa-trash"></i></a>
                  <a href="<?=base_url();?>/rw/informasi_racun/edit/<?=$rcn['id'];?>"   class ="btn btn-xs btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                  </td>

            </tr>

          <?php endforeach; ?>
         </table>
      </div>
    </section>
  </div>

  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">form tambah racun hama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
    <?php echo form_open_multipart('/rw/informasi_racun/tambah_aksi');?>

      <div class = "form-group">
            <label> Nama racun</label>
            <input type="text" name= "nama" class= "form-control">
      </div>
      <div class = "form-group">
            <label> Fungsi Utama</label>
            <input type="text" name= "fungsi" class= "form-control">
      </div>
      <div class = "form-group">
            <label> tanggal</label>
            <input type="date" name= "tanggal" class= "form-control">
      </div>
      <div class = "form-group">
            <label> nama kecamatan</label>
            <input type="text" name="kecamatan" class= "form-control">
      </div>
      <div class = "form-group">
            <label> harga racun</label>
            <input type="numbar" name= "harga" class= "form-control">
      </div>

      <div class = "form-group">
            <label>alamat</label>
            <input type="text" name= "alamat" class= "form-control">
      </div>

      <div class = "form-group">
            <label>Upload foto</label>
            <input type="file" name= "foto" class= "form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
      <?php echo form_close(); ?>

      </div>

    </div>
  </div>
</div>
