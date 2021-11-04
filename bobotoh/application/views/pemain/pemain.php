
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA PEMAIN</h1>
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
                      <a href="<?=site_url('pemain/input/')?>" class="nav-link">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fa fa-plus"></i>tambah data pemain
                            </button>
                      </a>
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>TEAM</th>
                        <th>posisi</th>
                        <th>nama pemain</th>
                        <th>photo</th>
                        <th>status</th>
                        <th>tanggal</th>
                        <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach ($pemain as $pm) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pm->pm_team ?></td>
                            <td><?php echo $pm->pm_posisi ?></td>
                            <td><?php echo $pm->pm_npemain ?></td>
                            <td><?php echo $pm->pm_photo?></td>
                            <td><?php echo $pm->pm_stat ?></td>
                            <td><?php echo $pm->pm_tgl ?></td> 
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="javascript: return confirm('anda yakin hapus')" href="<?=base_url()?>pemain/hapus/<?=$pm->pm_id?>">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" href="<?=base_url()?>pemain/edit/<?=$pm->pm_id?>">
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