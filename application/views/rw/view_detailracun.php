
<div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
    <h3 class="text-center py-5">DETAIL DATA RACUN YANG DIGUNAKAN</h3>

      <div class="card col-md-5 mb-3 mx-auto">
        <img src="<?php echo base_url() ?>/assets/foto_spektisida/<?php echo $detail->foto; ?>" width ="10%" height="10%" class="card-img-top" alt="...">
        <div class="card-body">
          <table>
            <tbody>
              <tr>
                <td>Nama Racun</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->nama_racun ?></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->tanggal ?></td>
              </tr><br>
              <tr>
                <td>Kecamatan</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->kecamatan ?></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->harga_racun ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td class="pl-4">:</td>
                <td class="pl-4"><?php echo $detail->alamat ?></td>
              </tr>
            </tbody>
          </table>

          <p class="card-text"></p>
          <a href="<?php echo site_url('/Rw/informasi_racun')?>">
          <button class = "btn btn-primary">Back</button>
          </td>
        </div>
      </div>

    </section>

</div>
