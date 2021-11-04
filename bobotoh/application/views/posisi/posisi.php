
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA POSISI</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                      <a href="<?=site_url('posisi/input/')?>" class="nav-link">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fa fa-plus"></i>tambah data posisi
                            </button>
                      </a>
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA POSISI</th>
                        <th>KETERANGAN</th>
                        <th>STATUS</th>
                        <th>TANGGAL</th>
                        <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach ($posisi as $p) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $p->p_nposisi ?></td>
                            <td><?php echo $p->p_ket ?></td>
                            <td><?php echo $p->p_stat?></td> 
                            <td><?php echo $p->p_tgl?></td> 
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="javascript: return confirm('anda yakin hapus')" href="<?=base_url()?>posisi/hapus/<?=$p->p_id?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" href="<?=base_url()?>posisi/edit/<?=$p->p_id?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>