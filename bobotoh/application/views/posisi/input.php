 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TAMBAH DATA POSISI</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Posisi</h3>
            </div>
            <div class="card-body">
             	<form action="<?php echo base_url().'posisi/tambah_aksi'; ?>" method="post">
					<div  class="form-group">
						<label>posisi</label>
						<input type="text" name="posisi" class="form-control">
					</div>
					<div  class="form-group">
						<label>keterangan</label>
						<input type="text" name="keterangan" class="form-control" >
					</div>
					<div  class="form-group">
						<label>status</label>
						 <select class="form-control select2" name="status" style="width: 100%;">
				                <option selected="selected">aktif</option>
				                <option> aktif</option>
				                <option>tidak aktif</option>
				              </select>
					</div>
					<div  class="form-group">
						<label>TANGGAL</label>
						<input type="date" name="tgl" class="form-control">
					</div>
						<a href="<?php echo base_url('posisi/index'); ?>" class="btn btn-primary">kembali </a>
						<button type="submit" class="btn btn-primary">simpan</button>
				</form>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>

