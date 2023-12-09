<script>
  function hapus_u(data_u){
    alert('OK');
    window.location=("delete.php?id="+data_u);
</script>
<?php
session_start();
//    unset($_SESSION['nama']);
//    unset($_SESSION['tingkat']);
session_destroy();
header('Location:index.php');
?>
