<div class="content-wrapper" style="margin-left: 0;">
  <h3 class="text-center py-5">EDIT Racun</h3>
  <div class="card col-md-9 mb-3 mx-auto">
        <section>
        <?php foreach($racun as $rcn) {?>
        <form  action = "<?php echo site_url().'rw/informasi_racun/update'; ?>" method = "post">

        <div class= "form-group">

                <label>Nama Racun </label><br>
                <input type="hidden" name="id" class="form-control" value="<?php echo $rcn->id ?>">
                <th>
                <input type="text" name="nama_racun" class ="form-control" value ="<?php echo $rcn->nama_racun ?>">

        </div>
        <div class= "form-group">
        <br> <label>Fungsi Utama</label> <br>
        <input type="text" name="fungsi" class ="form-control" value ="<?php echo $rcn->fungsi ?>">

        </div>
        <div class= "form-group">
        <br>  <label>Tanggal </label><br>
                <input type="text" name="tanggal" class ="form-control" value ="<?php echo $rcn->tanggal ?>">
        </div>

        <div class= "form-group">
        <br>  <label>Kecamatan </label> <br>
                 <input type="text" name="tanggal" class ="form-control" value ="<?php echo $rcn->kecamatan ?>">         
        </div>

        <div class= "form-group">
        <br>   <label>Harga </label> <br>
                 <input type="text" name="harga_racun" class ="form-control" value ="<?php echo $rcn->harga_racun ?>">
        </div>

        <div class= "form-group">
        <br>   <label>Alamat </label> <br>
        <input type="text" name="alamat" class ="form-control" value ="<?php echo $rcn->alamat ?>">
        </div>


            <br>
        <button type="reset" class="btn btn-danger">reset</button>
        <button type="submit" class="btn btn-primary">simpan</button>


        </form>
<?php }?>
        </div>
        </section>
</div>
