<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<?php
include ('config.php');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Tambah Rayon</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <section class="register">
      <h1>Tambah Rayon</h1>
      <form method="post" action="tbh_sek_save.php">
      <div>
      <h3>ID Sekolah</h3>
      <input type="text" name="id_sek" value="" required>
      <h3>Nama Sekolah</h3>
      <input type="text" name="nama_sekolah" value="" required>
      <h3>Alamat Sekolah</h3>
      <input type="text" name="alamat_sekolah" value="" required>
      <h3>ID Rayon</h3>
      <select name="id_rayon" size="1" id="id_rayon">
    <?php
    $conn = pg_connect("host=localhost port=5432 dbname=psb user=postgres password=z") or die('Could not connect: ' . pg_last_error());
    $sql = pg_query("SELECT id_rayon FROM rayon");
    while ($row = pg_fetch_assoc($sql)) { ?> 
  <option><?php echo ($row['id_rayon']);?></option>
  <?php }?>
    </select>
      </div>
      
      <p class="submit"><input type="submit" name="submit" value="Simpan"><input type="reset" name="commit" value="Reset"></p>
      </form>
      <p align="right"><a href="index.php"><button>Menu</button></a><a href="data_sek.php"><button>Lihat</button></a></p>
    </section>
  </div>

  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>