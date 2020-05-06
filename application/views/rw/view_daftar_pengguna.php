  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content">
      <h3 class="text-center py-5">DAFTAR PENGGUNA APLIKASI</h3>
      <div class="card col-md-9 mb-3 mx-auto">
        <table class="table">
              <tr>
                  <th>No</th>
                  <th>nama </th>
                  <th>kecamatan </th>
                  <th>keluarahan </th>
                  <th>desa </th>
                  <th>dusun </th>
                  <th>email </th>
                  <th>
              </tr>
              <?php
              $no= 1;
               foreach ($pengguna as $pga): ?>
                <tr>
                      <td><?php echo $pga['id']; ?></td>
                      <td><?php echo $pga['name']; ?></td>
                      <td><?php echo $pga['kecamatan']; ?></td>
                      <td><?php echo $pga['kelurahan']; ?></td>
                      <td><?php echo $pga['desa']; ?></td>
                      <td><?php echo $pga['dusun']; ?></td>
                      <td><?php echo $pga['email']; ?></td>
                </tr>

              <?php endforeach; ?>
             </table>
      </div>

    </section>
</div>


  <!-- ini adalah tampilan tambah racun rumput-->
              <!-- Button trigger modal -->



    <!-- ini adalah tampilan tambah racun rumput ini batas-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    To the right
    <div class="float-right d-none d-sm-inline"> -->
