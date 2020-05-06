<div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI PERTANIAN</h3>
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6"> 
          </div>
          <div class="col-md-6">
            <!-- SEARCH FORM -->
            <form class="form-inline float-right">
              <div class="input-group input-group-sm">
              <form method="get" action = "<?php echo site_url().'Rw/informasi_pertanian'?>">
                <input class="form-control form-control-navbar" type="text" placeholder="Nama petani" aria-label="Search" name="keyword" id="keyword">
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
                <th>no</th>
                <th>nama petani</th>
                <th>jenis kelamin</th>
                <th>tanggal panen</th>
                <th>jenis beras</th>
                <th>harga</th>
                <th>kecamatan</th>
                <th>kelurahan</th>
                <th>alamat</th>
                <th>jumlah</th>
                <th></th>
            </tr>
            <?php
            $no = 1;

             foreach ($hasil as $hsl): ?>
              <tr>
                <td><?php echo $hsl['id']; ?></td>
                <td><?php echo $hsl['nama_petani']; ?></td>
                <td><?php echo $hsl['jenis_kelamin']; ?></td>
                <td><?php echo $hsl['tgl_panen']; ?></td>
                <td><?php echo $hsl['nama_beras']; ?></td>
                <td><?php echo $hsl['harga']; ?></td>
                <td><?php echo $hsl['kecamatan']; ?></td>
                <td><?php echo $hsl['kelurahan']; ?></td>
                <td><?php echo $hsl['alamat']; ?></td>
                <td><?php echo $hsl['jumlah']; ?></td>

               
              </tr>

            <?php endforeach; ?>
           </table>
      </section>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
     

      

        </div>

      </div>
    </div>
</section>
</div>
