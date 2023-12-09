<?php
session_start();
include ('config.php');
$username =$_POST['username'];
$pw =$_POST['pw'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_users WHERE username='$username' AND pw='$pw'");
if (mysqli_num_rows($query)==1){
    header('Location:../index2.php');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['tingkat'] = $user['tingkat'];
    
}
else if ($username=='' || $pw==''){
    header('Location:../index.php?error=2');
}
else{
    header('Location:../index.php?error=1');
}

?>