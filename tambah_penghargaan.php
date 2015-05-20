<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="model.css" type="text/css" media="all">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>penghargaan</title>
</head>
<?php
include ('config.php');
?>
<body>
<div id="atas">
<p>Tambah Penghargaan</p>
</div>

<div id="tengah">
<form action="insert_penghargaan.php" method="post">
<table width="415" border="0">
  <tr>
    <th align="center" width="252" scope="col">ID Penghargan</th>
    <td width="8" scope="col">:</td>
    <th align="left" width="141" scope="col">
      <input id="id_penghargaan" name="id_penghargaan" type="text" required="required" /></th>
  </tr>
  <tr>
    <th align="center" scope="row">Nama Penghargaan</th>
    <td>:</td>
    <td><input id="nama_penghargaan" name="nama_penghargaan" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Tingkat</th>
    <td>:</td>
    <td><input id="tingkat" name="tingkat" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">ID Anda</th>
    <td>:</td>
    <td><select name="id_pemilih" size="1" id="id_pemilih">
      <?php
    $conn = pg_connect("host=localhost port=5432 dbname=psb user=postgres password=z") or die('Could not connect: ' . pg_last_error());
    $sql = pg_query("SELECT id_pemilih FROM calon_siswa");
    while ($row = pg_fetch_assoc($sql)) { ?> 
      <option><?php echo ($row['id_pemilih']);?></option>
      <?php }?>
      </select></td>
  </tr>
</table>
<br />
<button type="submit" name="submit">simpan</button>
<button type="reset"> reset</button>
</form>
</div>

<div id="bawah">
<p>
</div>
</body>
</html>
