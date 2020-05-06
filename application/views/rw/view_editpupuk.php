<div class="content-wrapper" style="margin-left: 0;">
  <h3 class="text-center py-5">EDIT PUPUK</h3>
  <div class="card col-md-9 mb-3 mx-auto">
        <section>
        <?php foreach($pupuk as $ppk) {?>
        <form  action = "<?php echo site_url().'rw/informasi_pupuk/update'; ?>" method = "post">

        <div class= "form-group">

                <label>Nama Pupuk </label><br>
                <input type="hidden" name="id" class="form-control" value="<?php echo $ppk->id ?>">
                <th>
                <input type="text" name="nama_pupuk" class ="form-control" value ="<?php echo $ppk->nama_pupuk ?>"><br>

        </div>
        <div class= "form-group">
        <br> <label>Fungsi Utama</label> <br>
                <input type="text" name="fungsi" class ="form-control" value ="<?php echo $ppk->fungsi ?>">

        </div>
        <div class= "form-group">
        <br>  <label>Tanggal </label><br>
                <input type="text" name="tanggal" class ="form-control" value ="<?php echo $ppk->tanggal ?>">
        </div>

        <div class= "form-group">
        <br>  <label>Kecamatan </label> <br>
                <input type="text" name="kecamatan" class ="form-control" value ="<?php echo $ppk->kecamatan?>">
        </div>

        <div class= "form-group">
        <br>   <label>Harga </label> <br>
                <input type="text" name="harga_pupuk" class ="form-control" value ="<?php echo $ppk->harga_pupuk ?>">
        </div>

        <div class= "form-group">
        <br>   <label>Alamat </label> <br>
                <input type="text" name="alamat" class ="form-control" value ="<?php echo $ppk->alamat ?>">
        </div>


            <br>
        <button type="reset" class="btn btn-danger">reset</button>
        <button type="submit" class="btn btn-primary">simpan</button>


        </form>
<?php }?>
        </div>
        </section>
</div>
