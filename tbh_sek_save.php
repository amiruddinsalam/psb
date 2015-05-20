<?php
//baca data
$id_rayon = $_POST["id_sek"];
$nama_rayon = $_POST["nama_sekolah"];
$kec = $_POST["alamat_sekolah"];
$id_wil = $_POST["id_rayon"];


//simpan data
$sql="insert into sekolah (id_sekolah, nama_sekolah, alamat, id_rayon_rayon) values ('$id_rayon','$nama_rayon','$kec','$id_wil')";
$conn=pg_connect ("host=localhost port=5432 dbname=psb user=postgres password=z");

//mengetahui berhasil atau tidaknya eksekusi
if ($conn){
	$hasil=pg_exec ($conn,$sql);
	if ($hasil){
	echo"<script type='text/javascript'>alert('Berhasil Tambah Data');window.location.assign('tbh_sek_pil.php');</script>";}
		else{echo"simpan gagal";}
}
else{echo"koneksi gagal";}
?>