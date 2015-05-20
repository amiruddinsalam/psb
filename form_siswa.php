<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="model.css" type="text/css" media="all">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pengisian siswa</title>
</head>
<?php
include ('config.php');
?>
<body>
<div id="atas">
<p>Penerimaan Siswa Baru On-Line<br>Sekolah Menengah Pertama<br>Se-Surabaya</p>
</div>

<div id="tengah">
<form action="insert.php" method="post">
<table width="415" border="0">
  <tr>
    <th align="center" width="252" scope="col">Tulis ID</th>
    <td width="8" scope="col">:</td>
    <th align="left" width="141" scope="col">
      <input id="id_siswa" name="id_siswa" type="text" required="required" /></th>
  </tr>
  <tr>
    <th align="center" scope="row">Nama Lengkap</th>
    <td>:</td>
    <td><input id="nama_lengkap" name="nama_lengkap" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Alamat</th>
    <td>:</td>
    <td><input id="alamat" name="alamat" type="text" required="required"></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nomor UNAS SD</th>
    <td>:</td>
    <td><input id="no_unas" name="no_unas" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nomor Kartu Keluarga</th>
    <td>:</td>
    <td><input id="no_kk" name="no_kk" type="text" required="required"></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nama Ayah</th>
    <td>:</td>
    <td><input id="nama_ayah" name="nama_ayah" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nilai IPA</th>
    <td>:</td>
    <td><input id="nilai_ipa" name="nilai_ipa" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nilai BI</th>
    <td>:</td>
    <td><input id="nilai_bi" name="nilai_bi" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">Nilai MM</th>
    <td>:</td>
    <td><input id="nilai_mm" name="nilai_mm" type="text" required="required" /></td>
  </tr>
  <tr>
    <th align="center" scope="row">ID Sekolah Pilihan</th>
    <td>:</td>
    <td><select name="id_sekolah" size="1" id="id_sekolah">
    <?php
    $conn = pg_connect("host=localhost port=5432 dbname=psb user=postgres password=z") or die('Could not connect: ' . pg_last_error());
    $sql = pg_query("SELECT id_sekolah FROM sekolah");
    while ($row = pg_fetch_assoc($sql)) { ?> 
  <option><?php echo ($row['id_sekolah']);?></option>
  <?php }?>
    </select></td>
  </tr>
  <tr>
    <th align="center" scope="row">ID Sekolah Asal</th>
    <td>:</td>
    <td><select name="id_sekolah_asal" size="1" id="id_sekolah_asal">
    <?php
    $conn = pg_connect("host=localhost port=5432 dbname=psb user=postgres password=z") or die('Could not connect: ' . pg_last_error());
    $sql = pg_query("SELECT id_sekolah_asal FROM sekolah_asal");
    while ($row = pg_fetch_assoc($sql)) { ?> 
  <option><?php echo ($row['id_sekolah_asal']);?></option>
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

<a href="tambah_penghargaan.php"><button>tambah penghargaan</button></a><br>
<button>cetak</button><br></p>
</div>
</body>
</html>
