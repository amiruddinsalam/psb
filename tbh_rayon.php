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
      <form method="post" action="tbh_rayon_save.php">
      <div>
      <h3>ID Rayon</h3>
      <input type="text" name="id_rayon" value="" required>
      <h3>Nama Rayon</h3>
      <input type="text" name="nama_rayon" value="" required>
      <h3>Alamat Rayon</h3>
      <input type="text" name="alamat_rayon" value="" required>
      <h3>ID Wilayah</h3>
      <select name="id_wil" size="1" id="id_wil">
    <?php
    $conn = pg_connect("host=localhost port=5432 dbname=psb user=postgres password=z") or die('Could not connect: ' . pg_last_error());
    $sql = pg_query("SELECT id_wilayah FROM wilayah");
    while ($row = pg_fetch_assoc($sql)) { ?> 
  <option><?php echo ($row['id_wilayah']);?></option>
  <?php }?>
    </select>
      </div>
      
      <p class="submit"><input type="submit" name="submit" value="Simpan"><input type="reset" name="commit" value="Reset"></p>
      </form>
      <p align="right"><a href="index.php"><button>Menu</button></a><a href="data_rayon.php"><button>Lihat</button></a></p>
    </section>
  </div>

  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>