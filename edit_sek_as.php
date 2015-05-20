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
  <title>Edit Data Sekolah</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<?php 
$user_id = $_GET['uid'];
$query = pg_query("select * from sekolah_asal where id_sekolah_asal='$user_id'");
$data = pg_fetch_array($query);
?>
<body>
  <div class="container">
    <section class="register">
      <h1>Tambah Rayon</h1>
      <form method="post" action="update_sek_as.php">
      <div>
      <h3>ID Sekolah</h3>
      <input type="text" name="id" value="<?php echo $data['id_sekolah_asal']; ?>" required>
      <h3>Nama</h3>
      <input type="text" name="nama" value="<?php echo $data['nama_sekolah'];?>" required>
      <h3>Kota</h3>
      <input type="text" name="kota" value="<?php echo $data['kota_sekolah_asal'];?>" required>
      </div>
      
      <p class="submit"><input type="submit" name="submit" value="Simpan"><input type="reset" name="commit" value="Reset"></p>
      </form>
      <p align="right"><a href="index.php"><button>Menu</button></a><a href="data_sek_as.php"><button>Lihat</button></a></p>
    </section>
  </div>

  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>
