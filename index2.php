<!DOCTYPE html>
<html lang="en">
<?php 
session_start ();
if(!$_SESSION['nama']){
  header('Location:index.php?session=expired');
}
include('head.php');?>
<?php include('conf/config.php');?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>    
    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('maincontent.php');
      }
      else if ($_GET['page']=='data-input'){
        include('tampil_brg.php');
      }
      else if ($_GET['page']=='data-output'){
        include('output.php');
      }
      else if ($_GET['page']=='edit-data'){
        include('edit/edit_data.php');
      } 
      else if ($_GET['page']=='chart-input'){
        include('superadmin/cinput.php');
      }
      else if ($_GET['page']=='chart-output'){
        include('superadmin/cout.php');
      }
      else if ($_GET['page']=='table-input'){
        include('superadmin/tinput.php');
      }
      else if ($_GET['page']=='table-output'){
        include('superadmin/tout.php');
      }
      else if ($_GET['page']=='users'){
        include('superadmin/data_u.php');
      }
      else if ($_GET['page']=='edit-u'){
        include('edit/edit_u.php');
      } 
      else {
        include('nf.php');
      }
    }
    else {
      include('maincontent.php');
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include('foot.php');?>
</div>
<!-- ./wrapper -->


</body>
</html>
