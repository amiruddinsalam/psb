<?php
include('config.php');


$id         = $_POST['id'];
$nama	    = $_POST['nama'];
$kec        = $_POST['kec'];
$wil	    = $_POST['id_wil'];


//update data di database sesuai user_id
$query = pg_query($conn,"update rayon set id_rayon='$id', nama_rayon='$nama', kecamatan='$kec', id_wilayah_wilayah='$wil' where id_rayon='$id'") or die(mysql_error());

if ($query) {
echo"<script type='text/javascript'>alert('Berhasil Edit Data');window.location.assign('data_rayon.php');</script>";
} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_rayon.php');</script>";
}
?>