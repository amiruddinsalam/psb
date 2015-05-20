<?php
include('config.php');


$id         = $_POST['id'];
$nama	    = $_POST['nama'];

//update data di database sesuai user_id
$query = pg_query($conn,"update wilayah set id_wilayah='$id', nama_wilayah='$nama' where id_wilayah='$id'") or die(mysql_error());

if ($query) {
echo"<script type='text/javascript'>alert('Berhasil Edit Data');window.location.assign('data_wilayah.php');</script>";
} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_wilayah.php');</script>";
}
?>