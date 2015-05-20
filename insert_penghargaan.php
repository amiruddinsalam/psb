<?php
//baca data
$id_penghargaan = $_POST["id_penghargaan"];
$nama_penghargaan = $_POST["nama_penghargaan"];
$tingkat = $_POST["tingkat"];
$id_pemilih = $_POST["id_pemilih"];

//simpan data
$sql="insert into penghargaan (id_penghargaan, nama_penghargaan, tingkat, id_pemilih_calon_siswa) values ('$id_penghargaan','$nama_penghargaan','$tingkat','$id_pemilih')";
$conn=pg_connect ("host=localhost port=5432 dbname=psb user=postgres password=z");

//mengetahui berhasil atau tidaknya eksekusi
if ($conn){
	$hasil=pg_exec ($conn,$sql);
	if ($hasil){
	echo"<script type='text/javascript'>alert('Berhasil Disimpan');window.location.assign('form_siswa.php');</script>";}
		else{echo"simpan gagal";}
}
else{echo"koneksi gagal";}
?>