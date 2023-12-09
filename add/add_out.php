<?php
include('../conf/config.php');
$ku   = $_GET['kd_unit'];
$nama   = $_GET['nama_brg'];
$tgl  = $_GET['tgl_keluar'];
$jumlah = $_GET['jumlah_brg'];
$satuan = $_GET['satuan_brg'];
$tujuan = $_GET['tujuan_brg'];
$query = mysqli_query($koneksi,"INSERT INTO tb_output (kd_unit,nama_brg,tgl_keluar,jumlah_brg,satuan_brg,tujuan_brg) VALUES ('$ku','$nama','$tgl','$jumlah','$satuan','$tujuan')");
header('Location:../index2.php?page=data-output');
?>