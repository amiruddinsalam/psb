<?php
//baca data
$id_rayon = $_POST["id_rayon"];
$nama_rayon = $_POST["nama_rayon"];
$kec = $_POST["alamat_rayon"];
$id_wil = $_POST["id_wil"];


//simpan data
$sql="insert into rayon (id_rayon, nama_rayon, kecamatan, id_wilayah_wilayah) values ('$id_rayon','$nama_rayon','$kec','$id_wil')";
$conn=pg_connect ("host=localhost port=5432 dbname=psb user=postgres password=z");

//mengetahui berhasil atau tidaknya eksekusi
if ($conn){
	$hasil=pg_exec ($conn,$sql);
	if ($hasil){
	echo"<script type='text/javascript'>alert('Berhasil Tambah Data');window.location.assign('tbh_rayon.php');</script>";}
		else{echo"simpan gagal";}
}
else{echo"koneksi gagal";}
?>