<?php 
include('config.php');

$uid = $_GET['uid'];

$query = pg_query("delete from sekolah where id_sekolah='$uid'") or die(mysql_error());

if ($query) {
	echo"<script type='text/javascript'>alert('Berhasil Hapus Data');window.location.assign('data_sek.php');</script>";

} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_sek.php');</script>";;
}
?>