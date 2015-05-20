<?php
//baca data
$id_wilayah = $_POST["id_wilayah"];
$nama_wilayah = $_POST["nama_wilayah"];

//simpan data
$sql="insert into wilayah (id_wilayah, nama_wilayah) values ('$id_wilayah','$nama_wilayah')";
$conn=pg_connect ("host=localhost port=5432 dbname=psb user=postgres password=z");

//mengetahui berhasil atau tidaknya eksekusi
if ($conn){
	$hasil=pg_exec ($conn,$sql);
	if ($hasil){
	echo"<script type='text/javascript'>alert('Berhasil Tambah Data');window.location.assign('tbh_wilayah.php');</script>";}
		else{echo"simpan gagal";}
}
else{echo"koneksi gagal";}
?>