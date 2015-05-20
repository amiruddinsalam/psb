<?php
//baca data
$id_siswa = $_POST["id_siswa"];
$nama_lengkap = $_POST["nama_lengkap"];
$alamat = $_POST["alamat"];
$no_unas = $_POST["no_unas"];
$no_kk = $_POST["no_kk"];
$nama_ayah = $_POST["nama_ayah"];
$nilai_ipa = $_POST["nilai_ipa"];
$nilai_bi = $_POST["nilai_bi"];
$nilai_mm = $_POST["nilai_mm"];
$id_sekolah = $_POST["id_sekolah"];
$id_sekolah_asal = $_POST["id_sekolah_asal"];

//simpan data
$sql="insert into calon_siswa (id_pemilih, nama_lengkap, alamat, nomor_unas, nomor_kk, nama_ayah, nilai_ipa, nilai_bi, nilai_mm, id_sekolah_sekolah, id_sekolah_asal_sekolah_asal) values ('$id_siswa','$nama_lengkap','$alamat','$no_unas','$no_kk','$nama_ayah','$nilai_ipa','$nilai_bi','$nilai_mm','$id_sekolah','$id_sekolah_asal')";
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