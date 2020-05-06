<div class="content-wrapper" style="margin-left: 0;">
        <section>
          <h3 class="text-center py-5">EDIT PERTANIAN</h3>
          <div class="card col-md-9 mb-3 mx-auto">
        <?php foreach($hasil as $hsl) {?>
        <form  action = "<?php echo site_url().'rw/informasi_pertanian/update'; ?>" method = "post">

        <div class= "form-group">

                <label>Nama petani </label><br>
                <input type="hidden" name="id" class="form-control" value="<?php echo $hsl->id ?>">
                <th>
                <input type="text" name="nama_petani" class ="form-control" value ="<?php echo $hsl->nama_petani ?>"><br>

        </div>
        <div class= "form-group">
        <br> <label>Jenis Kelamin</label> <br>
                <input type="text" name="jenis_kelamin" class ="form-control" value ="<?php echo $hsl->jenis_kelamin ?>">

        </div>
        <div class= "form-group">
        <br>  <label>Tanggal </label><br>
                <input type="text" name="tgl_panen" class ="form-control" value ="<?php echo $hsl->tgl_panen ?>">
        </div>
        <div class= "form-group">
        <br>   <label>Nama Beras</label><br>
                <input type="text" name="nama_beras" class ="form-control" value ="<?php echo $hsl->nama_beras?>">
        </div>

        <div class= "form-group">
        <br>   <label>Harga </label> <br>
                <input type="text" name="harga" class ="form-control" value ="<?php echo $hsl->harga ?>">
        </div>

        <div class= "form-group">
        <br>  <label>Kecamatan </label> <br>
                <input type="text" name="kecamatan" class ="form-control" value ="<?php echo $hsl->kecamatan?>">
        </div>
        <div class= "form-group">
        <br>    <label>Kelurahan </label> <br>
                <input type="text" name="kelurahan" class ="form-control" value ="<?php echo $hsl->kelurahan?>">
        </div>
        <div class= "form-group">
        <br>   <label>Alamat </label> <br>
                <input type="text" name="alamat" class ="form-control" value ="<?php echo $hsl->alamat?>">
        </div>
        <div class= "form-group">
        <br>   <label>jumlah </label> <br>
                <input type="text" name="jumlah" class ="form-control" value ="<?php echo $hsl->jumlah?>">
        </div>
        <div class= "form-group">
        <br>   <label>Longitude Koordinat lokasi</label> <br>
                <input type="text" name="longitude" class ="form-control" value ="<?php echo $hsl->longitude?>">
        </div>
        <div class= "form-group">
        <br>   <label>Latitude Koordinat lokasi</label> <br>
                <input type="text" name="latitude" class ="form-control" value ="<?php echo $hsl->latitude?>">
        </div>
            <br>
        <button type="reset" class="btn btn-danger">reset</button>
        <button type="submit" class="btn btn-primary">simpan</button>


        </form>
<?php }?>
        </section>
</div>
