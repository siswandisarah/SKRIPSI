<div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI PUPUK</h3>
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
              
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
              
            </tr>
          <?php endforeach; ?>
         </table>
    </section>
</div>

  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->


<!-- Modal -->

