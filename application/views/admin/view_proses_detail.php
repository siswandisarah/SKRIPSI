<div class="content-wrapper" style="margin-left:0;">
    <section class="content">
    <h3 class="text-center py-5">DETAIL DATA PROSES</h3>
      <div class="card mb-15 col-md-9 mx-auto">
        <img src="<?php echo base_url() ?>/assets/foto/<?php echo $detail->foto; ?>" width ="100" height="300" class="card-img-top" alt="...">
        <div class="card-body">
          <table>
            <tbody>
              <tr>
                <td >Proses</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->nama ?></td>
              </tr>
              <tr>
                <td>Nama Petani</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->nama_petani ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->alamat ?></td>
              </tr>
              <tr>
                <td>Penjelasan</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->deskription ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <a class="btn btn-primary" href="<?php echo site_url('/admin/proses_penanaman_dan_proses_panen')?>">Back</a>
        </div>
    </section>
</div>
