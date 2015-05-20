<?php
include('config.php');


$id         = $_POST['id'];
$nama	    = $_POST['nama'];
$kec        = $_POST['kec'];
$wil	    = $_POST['wil'];


//update data di database sesuai user_id
$query = pg_query($conn,"update sekolah set id_sekolah='$id', nama_sekolah='$nama', alamat='$kec', id_rayon_rayon='$wil' where id_rayon_rayon='$id'") or die(mysql_error());

if ($query) {
echo"<script type='text/javascript'>alert('Berhasil Edit Data');window.location.assign('data_sek.php');</script>";
} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_sek.php');</script>";
}
?>