<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="model.css" type="text/css" media="all">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit sekolah siswa</title>
</head>

<?php
include ('config.php');
?>

<body>
<div id="atas">
Edit Data Sekolah
</div>
<div id="tengah">
<form action="update_sek.php" method="post" >
<?php 
$user_id = $_GET['uid'];
$query = pg_query("select * from sekolah where id_sekolah='$user_id'");
$data = pg_fetch_array($query);
?>

<table width="312" border="0">
  <tr>
    <th align="right" scope="col">ID Sekolah</th>
    <th align="left" scope="col"><input id="id" name="id" value="<?php echo $data['id_sekolah']; ?>" nametype="text"></input></th>
  </tr>
  <tr>
    <th align="right" scope="row">Nama Sekolah</th>
    <td><input id="nama" name="nama" value="<?php echo $data['nama_sekolah'];?>" nametype="text"></input></td>
  </tr>
  <tr>
    <th align="right" scope="row">Alamat Sekolah</th>
    <td><input id="kec" name="kec" value="<?php echo $data['alamat'];?>" nametype="text"></input></td>
  </tr>
  <tr>
    <th align="right" scope="row">ID Rayon</th>
    <td><input id="wil" name="wil" value="<?php echo $data['id_rayon_rayon'];?>" nametype="text"></input></td>
  </tr>
</table>
</div>
<div id="bawah">
<input type="submit" name="submit" value="Simpan"/>
</form>
<br><button>Batal</button>
</div>
</body>
</html>
