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

<body>
  <div class="container">
    <section class="register">
      <h1>Tambah Wilayah</h1>
      <form method="post" action="tbh_wilayah_save.php">
      <div>
      <h3>ID Wilayah</h3>
      <input type="text" name="id_wilayah" value="" required>
      <h3>Nama Wilayah</h3>
      <input type="text" name="nama_wilayah" value="" required>
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