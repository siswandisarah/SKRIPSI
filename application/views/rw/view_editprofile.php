<div class="content-wrapper" style="margin-left: 0;">
        <section>
          <h3 class="text-center py-5">EDIT Profile</h3>
          <div class="card col-md-4 mb-3 mx-auto">
       
        <form  action = "<?php echo site_url().'rw/user/edit_profile'; ?>" method = "post">

        <div class="form-group">
         <label>Nama : </label>
        <input type="text" name="name" class ="form-control" value ="<?= $user['name']; ?>">
          <?= form_error('name', '<small class= "text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
         <label>Kecamatan :</label>
        <input type="text" name="kecamatan" class ="form-control" value ="<?= $user['kecamatan']; ?>">
        <?= form_error('kecamatan', '<small class= "text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
         <label>Kelurahan</label>
        <input type="text" name="kelurahan" class ="form-control" value ="<?= $user['kelurahan']; ?>">
        <?= form_error('kelurahan', '<small class= "text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
         <label>Desa</label>
        <input type="text" name="desa" class ="form-control" value ="<?= $user['desa']; ?>">
        <?= form_error('desa', '<small class= "text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
        <label>Dusun</label> 
        <input type="text" name="dusun" class ="form-control" value ="<?= $user['dusun']; ?>">
        <?= form_error('dusun', '<small class= "text-danger pl-3">', '</small>'); ?>
        </div>

        <div class="form-group">
        <label>Email</label> 
        <input type="text" name="email" class ="form-control" value ="<?= $user['email']; ?>" readonly>
        </div>
       
       <div class = "form-group row"> 
        <button type="submit" class="btn btn-primary">simpan</button>
        </div>

        </form>

        </section>
</div>
