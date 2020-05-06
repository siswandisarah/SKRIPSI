<div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI DESA NONAPAN DUA</h3>
      <div class="card mb-3 col-md-15 mx-auto my-2 px-3 py-2">
        <div class="row my-2">
          <div class="col-md-6"> 
          </div>
          <div class="col-md-6">
            <!-- SEARCH FORM -->
            
          </div>
        </div>

        <table class="table" >
          <tr>
              <td></th>
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
          </tr>
          <?php
          $no = 1;
         
           foreach ($hasil as $hsl): ?>
            <tr>
            <td>          
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
                   
                
                  
            </tr>

          <?php endforeach; ?>
         </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <p> total seluruh beras di desa Nonapan Dua: <td><?php echo $sum?> ton</p>
      
      </section>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
     

      

        </div>

      </div>
    </div>
</section>
</div>
