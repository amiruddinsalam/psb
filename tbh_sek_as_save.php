<?php
//baca data
$id_sekolah_asal = $_POST["id_sekolah_asal"];
$nama_sekolah_asal = $_POST["nama_sekolah_asal"];
$alamat_sekolah_asal = $_POST["alamat_sekolah_asal"];


//simpan data
$sql="insert into sekolah_asal (id_sekolah_asal, nama_sekolah, kota_sekolah_asal) values ('$id_sekolah_asal','$nama_sekolah_asal','$alamat_sekolah_asal')";
$conn=pg_connect ("host=localhost port=5432 dbname=psb user=postgres password=z");

//mengetahui berhasil atau tidaknya eksekusi
if ($conn){
	$hasil=pg_exec ($conn,$sql);
	if ($hasil){
	echo"<script type='text/javascript'>alert('Berhasil Tambah Data');window.location.assign('tbh_sek_as.php');</script>";}
		else{echo"simpan gagal";}
}
else{echo"koneksi gagal";}
?>