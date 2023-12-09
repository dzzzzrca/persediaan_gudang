    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambahkan Data Keluar
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Unit</th>
                    <th>Nama</th>
                    <th>Tanggal Keluar</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Tujuan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 0;
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_output");
                        while ($tampil = mysqli_fetch_array($query))
                        {
                          $no++
                    ?>
                    <tr>
                      <td width='5%'>
                        <?php echo $no;?>
                      </td>
                      <td width='7%'>
                        <?php echo $tampil["kd_unit"]; ?>
                      </td>
                      <td>
                        <?php echo $tampil["nama_brg"]; ?>
                      </td>
                      <td width='13%'>
                        <?php echo $tampil["tgl_keluar"]; ?>
                      </td>
                      <td width='5%'>
                        <?php echo $tampil["jumlah_brg"]; ?>
                      </td>
                      <td width='5%'>
                      <?php echo $tampil["satuan_brg"]; ?>
                      </td>
                      <td width='25%'>
                      <?php echo $tampil["tujuan_brg"]; ?>
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
              <h4 class="modal-title">Tambahkan Data Keluar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/add_out.php">
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
                    <label>Tanggal Keluar</label>
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
                <div class="row">
                <div class="col">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" placeholder="Tujuan" name="tujuan_brg" required>
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
