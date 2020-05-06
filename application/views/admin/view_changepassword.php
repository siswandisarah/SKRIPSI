<div class="content-wrapper" style="margin-left: 0;">
        <section>
          <h3 class="text-center py-5">CHANGE PASSWORD</h3>
          <div class="card col-md-4 mb-3 mx-auto">
       
        <form  action = "<?php echo site_url().'admin/user/changepassword'; ?>" method = "post">
        <?= $this->session->flashdata('message'); ?>
        <div class="form-group">
         <label for="current_password">Current Password</label>
        <input type="password" name="current_password" id="current_password" class ="form-control" > 
        <?= form_error('current_password', '<small class= "text-danger pl-3">', '</small>'); ?>     
        </div>

        <div class="form-group">
         <label for="new_password">New Password</label>
        <input type="password" name="new_password1" id="new_password1" class ="form-control" >  
        <?= form_error('new_password1', '<small class= "text-danger pl-3">', '</small>'); ?>     
        </div>

        <div class="form-group">
         <label for="new_password2">Repeat Password</label>
        <input type="password" name="new_password2" id="new_password2" class ="form-control" > 
        <?= form_error('new_password2[', '<small class= "text-danger pl-3">', '</small>'); ?>      
        </div>
       
       <div class = "form-group row"> 
        <button type="submit" class="btn btn-primary">Change Password</button>
        </div>

        </form>

        </section>
</div>
