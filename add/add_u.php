<?php
include('../conf/config.php');
$nama       = $_GET['nama'];
$username   = $_GET['username'];
$pw         = $_GET['pw'];
$tingkat    = $_GET['tingkat'];
$query = mysqli_query($koneksi,"INSERT INTO tb_users (id,nama,username,pw,tingkat) VALUES ('','$nama','$username','$pw','$tingkat')");
header('Location:../index2.php?page=users');
?>