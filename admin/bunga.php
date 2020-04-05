<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Bunga</h1>
      </div><!-- /.col -->
      <div class="col-sm-5">
      </div>
      <div class="col-sm-1">
        <a href="?hal=bunga_olah" style="float: right;" class="btn btn-block bg-gradient-primary btn-sm">Tambah</a>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title primary">List Data</h3>

          <div class="card-tools">
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Bunga</th>
                <th>Lama Pinjam</th>
                <th>Bunga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query="SELECT * from tb_bunga";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?php echo $no+=1; ?></td>
                    <td><?php echo $idbunga; ?></td>
                    <td><?php echo $lamapinjam; ?></td>
                    <td><?php echo $bunga; ?></td>
                  </td>

                  <td width="15%">

                    <a href="?hal=bunga_olah&id=<?php echo $idbunga; ?>" 
                      class="btn btn-icon btn-primary" title="Edit Data"><i class="fa fa-edit"></i> </a>

                      <a class="btn btn-danger" title="Hapus Data" href="bunga_proses.php?hapus=<?php echo $idbunga;?>" 
                        onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-trash"></i></a>

                      </td>
                    </tr>
                    <?php }} ?>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
