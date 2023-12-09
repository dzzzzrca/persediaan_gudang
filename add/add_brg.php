<?php
include('../conf/config.php');
$ku   = $_GET['kd_unit'];
$nama   = $_GET['nama_brg'];
$tgl  = $_GET['tgl_masuk'];
$jumlah = $_GET['jumlah_brg'];
$satuan = $_GET['satuan_brg'];
$query = mysqli_query($koneksi,"INSERT INTO tb_input (id,kd_unit,nama_brg,tgl_masuk,jumlah_brg,satuan_brg) VALUES ('','$ku','$nama','$tgl','$jumlah','$satuan')");
header('Location:../index2.php?page=data-input');
?>