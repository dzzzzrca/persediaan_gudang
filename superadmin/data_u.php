    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambahkan Data Pengguna
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 0;
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_users");
                        while ($tampil = mysqli_fetch_array($query))
                        {
                          $no++
                    ?>
                    <tr>
                      <td width='5%'>
                        <?php echo $no;?>
                      </td>
                      <td>
                        <?php echo $tampil["nama"]; ?>
                      </td>
                      <td width='10%'>
                        <?php echo $tampil["username"]; ?>
                      </td>
                      <td width='13%'>
                        <?php echo $tampil["pw"]; ?>
                      </td>
                      <td width='5%'>
                        <?php echo $tampil["tingkat"]; ?>
                      </td>
                      <td width='20%'>
                        <a onclick="hapus_u(<?php echo $tampil['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="index2.php?page=edit-u&&id=<?php echo $tampil['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      </td>
                    </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambahkan Data Pengguna</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/add_u.php">
            <div class="modal-body">
                <div class="row"> 
                  <div class="col">
                  <label>Nama Pengguna</label>
                    <input type="text" class="form-control" placeholder="Nama Pengguna" name="nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="pw" required>
                  </div>
                  <div class="form-group active">
                    <label for="exampleFormControlSelect1">Level</label>
                    <select class="form-control" id="exampleFormControlSelect1" name='tingkat'>
                      <option selected>Silahkan Pilih</option>
                      <option>Operator</option>
                      <option>Superadmin</option>
                    </select>
                  </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
                        </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
  function hapus_u(data_u){
    //alert('OK');
    //window.location=("delete.php?id="+data_u);
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "This user will lose his user privileges!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          (window.location="delete/hapus_u.php?id="+data_u)
          (
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'This user will not lose his user privileges :)',
            'error'
          )
        }
      })
  }
</script>