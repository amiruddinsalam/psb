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
      <h1>Data Wilayah</h1>

      <table width="322" border="1">
  <tr>
    <th width="84" scope="col"><div align="center">ID Wilayah</div></th>
    <th width="139" scope="col"><div align="center">Nama Wilayah</div></th>
    <th width="77" scope="col"><div align="center">Opsi</div></th>
  </tr>
  <?php
include ('config.php');
       $query = pg_query ( "select * from wilayah");
	   while ($data = pg_fetch_array($query)){
		   ?> 

    <th scope="row"><div align="center"><?php echo $data['id_wilayah'];?></div></th>
    <td><div align="center"><?php echo $data['nama_wilayah'];?></div></td>
    <td><div align="center"><a href="hapus_wilayah.php?uid=<?php echo $data['id_wilayah']; ?>">hapus</a>/<a href="edit_wilayah.php?uid=<?php echo $data['id_wilayah']; ?>">edit</a></div></td>
  </tr>
  <?php
		}
	?>
</table>
<a href="tbh_wilayah.php"><center><button>Kembali</button></center></a>
    </section>
        
  </div>
  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>