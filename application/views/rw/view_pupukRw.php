  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI PUPUK</h3>
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
              <button class = "btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class ="fa fa-plus"></i> tambah data pupuk</button>
          </div>
          <div class="col-md-6">
            <!-- SEARCH FORM -->
            <form class="form-inline float-right">
              <div class="input-group input-group-sm">
              <form method="get" action = "<?php echo site_url().'Rw/informasi_pupuk'?>">
                <input class="form-control form-control-navbar" type="text" placeholder="Nama pupuk" aria-label="Search" name="keyword" id="keyword">
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
              <th>Nama pupuk</th>
              <th>fungsi Utama</th>
              <th>Tanggal</th>
              <th>Kecamatan</th>
              <th>alamat</th>
              <th>Harga racun</th>
              <th>gambar</th>

              <th>Pilih action</th>
          </tr>
          <?php
          $no= 1;

           foreach ($pupuk as $ppk): ?>
            <tr>
              <td><?php echo $ppk['id']; ?></td>
              <td><?php echo $ppk['nama_pupuk']; ?></td>
              <td><?php echo $ppk['fungsi']; ?></td>
              <td><?php echo $ppk['tanggal']; ?></td>
              <td><?php echo $ppk['kecamatan']; ?></td>
              <td><?php echo $ppk['alamat']; ?></td>
              <td><?php echo $ppk['harga_pupuk']; ?></td>
              <td>  <img src="<?php echo base_url() ?>/assets/foto_pupuk/<?php echo $ppk['foto']; ?>"  width ="100" height="100">
              <td>
                <a href="<?=base_url();?>rw/informasi_pupuk/hapus_pupuk/<?=$ppk['id'];?>"   class ="btn btn-xs btn-danger" class = "btn btn-danger"><i class = "fa fa-trash"></i></a>
                <a href="<?=base_url();?>rw/informasi_pupuk/edit/<?=$ppk['id'];?>"   class ="btn btn-xs btn-primary btn-sm"><i class="fa fa-edit"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
         </table>
    </section>
</div>

  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">form tambah Pupuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
    <?php echo form_open_multipart('/rw/informasi_pupuk/tambah_aksi_pupuk');?>

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
