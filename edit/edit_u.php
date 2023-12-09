<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_u.php'>
                <div class="row"> 
                  <div class="col">
                  <label>Nama Pengguna</label>
                    <input type="text" class="form-control" placeholder="Nama Pengguna" name="nama" value="<?php echo $view['nama'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $view['username'];?>">
                  <input type="text" class="form-control" placeholder="Username" name="id" value="<?php echo $view['id'];?>"hidden>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="pw" value="<?php echo $view['pw'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select class="form-control" id="exampleFormControlSelect1" name='tingkat'>
                      <option value="<?php echo $view['tingkat'];?>" selected><?php echo $view['tingkat'];?></option>
                      <option value="Operator">Operator</option>
                      <option value="Superadmin">Superadmin</option>
                    </select>
                </div>
                </div>
                <button type="submit" class="btn btn-sm btn-info">Simpan</button>
              </form>
              <!-- /.card-body -->
    </div>
    </div>
</section>
            <!-- /.card -->
            <!-- general form elements disabled -->