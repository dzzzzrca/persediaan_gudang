<?php
include('../conf/config.php');
$id    = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_input WHERE id='$id'");
header('Location:../index2.php?page=data-input');
?>