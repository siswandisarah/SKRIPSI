<div class="content-wrapper" style="margin-left: 0;">
    <h3 class="text-center py-5">INFORMASI PESTISIDA</h3>
    <section class="content">
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
            
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
              <th>Alamat</th>
              <th>Foto</th>

             
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
                  <td><?php echo $rcn['alamat']; ?></td>
                  <td>  <img src="<?php echo base_url() ?>/assets/foto_spektisida/<?php echo $rcn['foto']; ?>"  width ="100" height="100">
            </tr>

          <?php endforeach; ?>
         </table>
      </div>
    </section>
  </div>

  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->


<!-- Modal -->

