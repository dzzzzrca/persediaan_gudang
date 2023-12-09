<?php 
include("conf/config.php");
$query = mysqli_query($koneksi,"SELECT nama_brg,
(SELECT jumlah_brg FROM tb_input WHERE nama_brg='Forklift') AS jf,
(SELECT satuan_brg FROM tb_input WHERE nama_brg='Forklift') AS sf,
(SELECT jumlah_brg FROM tb_input WHERE nama_brg='Crane') AS jc,
(SELECT satuan_brg FROM tb_input WHERE nama_brg='Crane') AS sc,
(SELECT jumlah_brg FROM tb_input WHERE nama_brg='Drum Handler') AS jd,
(SELECT satuan_brg FROM tb_input WHERE nama_brg='Drum Handler') AS sd,
(SELECT jumlah_brg FROM tb_input WHERE nama_brg='Trolley') AS jt,
(SELECT satuan_brg FROM tb_input WHERE nama_brg='Trolley') AS st
 FROM tb_input");
$view = mysqli_fetch_array($query);
?>
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><img src="dist/img/fr.png" style="width: 60%"></span>
        <div class="info-box-content">
          <span class="info-box-text">Forklift</span>
          <span class="info-box-number">
          <?php echo $view['jf'];?>
          <small><?php echo $view['sf'];?></small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-pink elevation-1"><img src="dist/img/crane.png" style="width: 60%"></span>

        <div class="info-box-content">
          <span class="info-box-text">Crane</span>
          <span class="info-box-number">
          <?php echo $view['jc'];?>
          <small><?php echo $view['sc'];?></small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><img src="dist/img/dh.png" style="width: 60%"></span>

        <div class="info-box-content">
          <span class="info-box-text">Drum Handler</span>
          <span class="info-box-number">
          <?php echo $view['jd'];?>
          <small><?php echo $view['sd'];?></small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><img src="dist/img/trolley.png" style="width: 60%"></span>

        <div class="info-box-content">
          <span class="info-box-text">Trolley</span>
          <span class="info-box-number">
          <?php echo $view['jt'];?>
          <small><?php echo $view['sd'];?></small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->