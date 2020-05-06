  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI PERTANIAN</h3>
      <div class="card mb-3 col-md-10 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6">
            <button class = "btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class ="fa fa-plus"></i> tambah informasi hasil panen</button>
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

                <td>
                  <a href="<?=base_url();?>rw/informasi_pertanian/hapus/<?=$hsl['id'];?>"  class ="btn btn-xs btn-danger" class = "btn btn-danger"><i class = "fa fa-trash"></i>  </a>
                  <a href="<?=base_url();?>rw/informasi_pertanian/edit/<?=$hsl['id'];?>"   class ="btn btn-xs btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                </td>
              </tr>

            <?php endforeach; ?>
           </table>
      </section>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">form tambah informasi hasil panen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
        <form method = "post" action = "<?php echo site_url().'/rw/informasi_pertanian/tambah_aksi2'?>">

        <div class = "form-group">
              <label> Nama petani</label>
              <input type="text" name= "nama_petani" class= "form-control">
        </div>
        <div class = "form-group">
              <label> jenis kelamin</label>
              <input type="text" name= "jenis_kelamin" class= "form-control">
        </div>
        <div class = "form-group">
              <label> tanggal panen</label>
              <input type="date" name= "tanggal" class= "form-control">
        </div>
        <div class = "form-group">
              <label> jenis beras</label>
              <input type="text" name= "jenis_beras" class= "form-control">
        </div>
        <div class = "form-group">
              <label> harga beras</label>
              <input type="numbar" name= "harga" class= "form-control">
        </div>
        <div class = "form-group">
              <label>kecamatan</label>
              <input type="text" name= "kecamatan" class= "form-control">
        </div>
        <div class = "form-group">
              <label>kelurahan</label>
              <input type="text" name= "kelurahan" class= "form-control">
        </div>
        <div class = "form-group">
              <label>alamat</label>
              <input type="text" name= "alamat" class= "form-control">
        </div>
        <div class = "form-group">
              <label>jumlah</label>
              <input type="text" name= "jumlah" class= "form-control">
        </div>
        <div class = "form-group">
              <label>Longitude Koordinat lokasi</label>
              <input type="text" name= "longitude" class= "form-control">
        </div>
        <div class = "form-group">
              <label>Latitude Koordinat lokasi</label>
              <input type="text" name= "latitude" class= "form-control">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
          <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
        </form>

        </div>

      </div>
    </div>
</section>
</div>
