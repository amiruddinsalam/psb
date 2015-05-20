<?php 
include('config.php');

$uid = $_GET['uid'];

$query = pg_query("delete from wilayah where id_wilayah='$uid'") or die(mysql_error());

if ($query) {
	echo"<script type='text/javascript'>alert('Berhasil Hapus Data');window.location.assign('data_wilayah.php');</script>";

} else {
echo"<script type='text/javascript'>alert('GAGAL');window.location.assign('data_wilayah.php');</script>";;
}
?>