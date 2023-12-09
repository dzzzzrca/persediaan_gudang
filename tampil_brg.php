    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambahkan Barang
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Tanggal Masuk</th>
                    <th>Kode Unit</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 0;
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_input");
                        while ($tampil = mysqli_fetch_array($query))
                        {
                          $no++
                    ?>
                    <tr>
                      <td width='15%'>
                        <?php echo $tampil["tgl_masuk"]; ?>
                      </td>
                      <td width='7%'>
                        <?php echo $tampil["kd_unit"]; ?>
                      </td>
                      <td>
                        <?php echo $tampil["nama_brg"]; ?>
                      </td>
                      <td width='5%'>
                        <?php echo $tampil["jumlah_brg"]; ?>
                      </td>
                      <td width='5%'>
                      <?php echo $tampil["satuan_brg"]; ?>
                      </td>
                      <td width='20%'>
                        <a onclick="hapus_data(<?php echo $tampil['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="index2.php?page=edit-data&&id=<?php echo $tampil['id'];?>" class="btn btn-sm btn-success">Edit</a>
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
              <h4 class="modal-title">Tambahkan Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/add_brg.php">
            <div class="modal-body">
                <div class="row"> 
                  <div class="col">
                  <label>Kode Unit</label>
                    <input type="text" class="form-control" placeholder="Kode Unit" name="kd_unit" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Nama" name="nama_brg" required>
                </div>
                <div class="row">
                  <div class="col">
                    <label>Tanggal Masuk</label>
                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" name="tgl_masuk" required>
                  </div>
                  <div class="col">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" placeholder="Jumlah" name="jumlah_brg" required>
                  </div>
                  <div class="col">
                    <label>Satuan</label>
                    <input type="text" class="form-control" placeholder="Satuan" name="satuan_brg" required>
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
  function hapus_data(data_id){
    //alert('OK');
    //window.location=("delete/hapus_data.php?id="+data_id);
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          (window.location="delete/hapus_data.php?id="+data_id)
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
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
  }
</script>