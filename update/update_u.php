<?php
include('../conf/config.php');
$id = $_GET['id'];
$nama   = $_GET['nama'];
$username   = $_GET['username'];
$pw  = $_GET['pw'];
$tingkat = $_GET['tingkat'];
$query = mysqli_query($koneksi,"UPDATE tb_users SET nama='$nama', username='$username', pw='$pw', tingkat='$tingkat' WHERE id='$id'");
header('Location:../index2.php?page=users');
?>