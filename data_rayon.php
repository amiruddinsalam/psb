<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Rayon</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <div class="container">
    <section class="register">
      <h1>Data Rayon</h1>

      <table width="322" border="1">
  <tr>
    <th width="84" scope="col"><div align="center">ID Rayon</div></th>
    <th width="139" scope="col"><div align="center">Nama Rayon</div></th>
<th width="84" scope="col"><div align="center">Alamat Rayon</div></th>
    <th width="139" scope="col"><div align="center">Id Wilayah</div></th>

    <th width="77" scope="col"><div align="center">Opsi</div></th>
  </tr>
  <?php
include ('config.php');
       $query = pg_query ( "select * from rayon");
	   

	   while ($data = pg_fetch_array($query)){
		   ?> 

    <th scope="row"><div align="center"><?php echo $data['id_rayon'];?></div></th>
    <td><div align="center"><?php echo $data['nama_rayon'];?></div></td>
     <th scope="row"><div align="center"><?php echo $data['kecamatan'];?></div></th>
    <td><div align="center"><?php echo $data['id_wilayah_wilayah'];?></div></td>

    <td><div align="center"><a href="hapus_rayon.php?uid=<?php echo $data['id_rayon']; ?>">hapus</a>/<a href="edit_rayon.php?uid=<?php echo $data['id_rayon']; ?>">edit</a></div></td>
  </tr>
  <?php
		}
	?>
</table>
<a href="tbh_rayon.php"><center><button>Kembali</button></center></a>
    </section>
  </div>
  <section class="about">
    Created by<a href="www.facebook.com/amiruddin.salam">Amiruddin Salam</a>
  </section>
</body>
</html>