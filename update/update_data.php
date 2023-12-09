<?php
include('../conf/config.php');
$id = $_GET['id'];
$ku   = $_GET['kd_unit'];
$nama   = $_GET['nama_brg'];
$tgl  = $_GET['tgl_masuk'];
$jumlah = $_GET['jumlah_brg'];
$satuan = $_GET['satuan_brg'];
$query = mysqli_query($koneksi,"UPDATE tb_input SET kd_unit='$ku', nama_brg='$nama', tgl_masuk='$tgl', jumlah_brg='$jumlah', satuan_brg='$satuan' WHERE id='$id'");
header('Location:../index2.php?page=data-input');
?>