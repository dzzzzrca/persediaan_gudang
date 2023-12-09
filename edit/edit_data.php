<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_input WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'>
                <div class="row"> 
                  <div class="col">
                  <label>Kode Unit</label>
                    <input type="text" class="form-control" placeholder="Kode Unit" name="kd_unit" value="<?php echo $view['kd_unit'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama_brg" value="<?php echo $view['nama_brg'];?>">
                  <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id'];?>"hidden>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Tanggal Masuk</label>
                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="tgl_masuk" value="<?php echo $view['tgl_masuk'];?>">
                  </div>
                  <div class="col">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="Jumlah" name="jumlah_brg" value="<?php echo $view['jumlah_brg'];?>">
                  </div>
                  <div class="col">
                    <label>Satuan</label>
                    <input type="text" class="form-control" placeholder="Satuan" name="satuan_brg" value="<?php echo $view['satuan_brg'];?>">
                  </div>
                </div>
                
                <br></br><button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
                </div>
              <!-- /.card-body -->
    </div>
    </div>
</section>
            <!-- /.card -->
            <!-- general form elements disabled -->