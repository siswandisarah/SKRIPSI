
<div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">INFORMASI PERTANIAN DI KECAMATAN DUMOGA BARAT</h3>
      <div style='text-align:center;'>
      <style>
        .redtext{
          color:red;
        }
      </style>
       <h5><strong> Total Keseluruhan Padi Di Kecamatan Dumoga Barat<td><h5 class="redtext"><?php echo $sum?> ton</h5></strong>
          </div>  
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
              <th>Id</th>
              <th>Nama Petani</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Panen</th>
              <th>Jenis Padi</th>
              <th>Harga</th>
              <th>Kelurahan</th>
              <th>Alamat</th>
              <th>Jumlah</th>
              <th>Petakan Lokasi</th>
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
                  <td><?php echo $hsl['kelurahan']; ?></td>
                  <td><?php echo $hsl['alamat']; ?></td>
                  <td><?php echo $hsl['jumlah']; ?></td>
                  <td>
						<div id="id-div-alamat-nama" style="display: none;"><?php echo $hsl['alamat']; ?></div>
						<div id="id-div-longitude" style="display: none;"><?php echo $hsl['longitude']; ?></div>
						<div id="id-div-latitude" style="display: none;"><?php echo $hsl['latitude']; ?></div>
						<button type="button" class="btn btn-success" id="btn-open-modal-maps" data-toggle="modal">Lokasi</button>
				  
				  </td>
                  
                  <td>
                   
                
                  
            </tr>

          <?php endforeach; ?>
         </table>
        </div>
        

        <div class="content-wrapper" style="margin-left: 0;">
           <section class="content" >
            <h5 class="text-center py-2">Jenis Benih Padi Yang Sering Digunakan</h5>
               <div class="card mb-3 col-md-8 mx-auto my-2 px-3 py-2">
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
              <th>Nama Benih Padi</th>
              <th>Banyak Petani Menggunakan Benih</th>
              
          </tr>
          <?php      
        foreach ($query->result() as $row):?>

        <h4>


       <tr>
       <td>
       
              <td> <br><?php echo $row->nama_beras;?></td>
              <td> <?php echo $row->total.'<br>';?> </td>
            
        </td>
        </tr>
          <?php endforeach; ?>
          
         </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
       
        
       
      
      </section>

     
	
	  
	  
      

        </div>

      </div>
    </div>
</section>
</div>



