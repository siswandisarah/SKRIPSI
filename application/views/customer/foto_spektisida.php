<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>foto spektisida</title>
<a href="<?php echo site_url('Pertanian_Bolaang_mongondow/Racun_hama')?>">
<?php
  $no= 1;
         
  foreach ($proses as $prs): ?>
  <style>
   img {
     border: 4px solid #575D63;   
     padding: 10px;
     width: 200px;
     height: 100px;
   }
</style>
</head>
<body>

            <p>Nama Racun :<td><?php echo $prs['nama_racun']; ?></td></p>
                <img src="<?php echo base_url() ?>/assets/foto/<?php echo $prs['foto']; ?> ">

<br>


  <br>

 <?php endforeach; ?>    



</body>
</html>