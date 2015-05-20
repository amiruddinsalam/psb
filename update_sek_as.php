<?php
include('config.php');


$id         = $_POST['id'];
$nama	    = $_POST['nama'];
$kota        = $_POST['kota'];


//update data di database sesuai user_id
$query = pg_query($conn,"update sekolah_asal set id_sekolah_asal='$id', nama_sekolah='$nama', kota_sekolah_asal='$kota' where id_sekolah_asal='$id'") or die(mysql_error());

if ($query) {
echo"<script type='text/javascript'>alert('Berhasil Edit Data');window.location.assign('data_sek_as.php');</script>";
} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_sek_as.php');</script>";
}
?>