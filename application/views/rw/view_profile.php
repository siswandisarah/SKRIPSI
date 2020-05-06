
<div class="content-wrapper" style="margin-left: 0;">
<h3 class="text-center py-5">My Profile</h3>
      <div class="card col-md-5 mb-3 mx-auto">
      <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
          <table>
            <tbody>
          
             
              <tr>
                <td>nama</td> 
                <td class="pl-4">:</td>
                <td class="pl-4"> <?= $user['name']; ?></td>
              </tr>
              <tr>
                <td>kecamatan</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= $user['kecamatan']; ?></td>
              </tr>
              <tr>
                <td>Kelurahan</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= $user['kelurahan']; ?></td>
              </tr>
              <tr>
                <td>Desa</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= $user['desa']; ?></td>
              </tr>
              <tr>
                <td>Dusun</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= $user['dusun']; ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= $user['email']; ?></td>
              </tr>
              <tr>
                <td>Mendaftar Tanggal</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?= date('d F Y', $user['date_created']); ?></td>
              </tr>

              </div>
            </div>
          </div>
      </table>
    </div>
    </section>
    <a href="<?=base_url('rw/user/edit_profile');?>" class ="btn btn-primary">EDIT Profile</a>

  </div>



 