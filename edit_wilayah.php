<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Wilayah</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<?php
include ('config.php');
?>
<body>
  <div class="container">
    <section class="register">
      <h1>Edit Data Wilayah</h1>
      <form method="post" action="update_wilayah.php">
<?php 
$user_id = $_GET['uid'];
$query = pg_query("select * from wilayah where id_wilayah='$user_id'");
$data = pg_fetch_array($query);
?>
      <div>
      <h3>ID Wilayah</h3>
      <input type="text" id="id" name="id" value="<?php echo $data['id_wilayah']; ?>" nametype="text" required="required"></input>
      <h3>Nama Wilayah</h3>
      <input type="text" id="nama" name="nama" value="<?php echo $data['nama_wilayah'];?>" nametype="text" required="required"></input>
      </div>
      
      <p class="submit"><input type="submit" name="submit" value="Simpan"><input type="reset" name="commit" value="Reset"></p>
      </form>
      <p align="right"><a href="index.php"><button>Menu</button></a><a href="data_wilayah.php"><button>Lihat</button></a></p>
    </section>
  </div>

  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>
