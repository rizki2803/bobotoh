 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TAMBAH DATA STADION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Team</h3>
            </div>
            <div class="card-body">
             	<form action="<?php echo base_url().'stadion/tambah_aksi'; ?>" method="post">
					<div  class="form-group">
						<label>team</label>
						<input type="text" name="team" class="form-control">
					</div>
					<div  class="form-group">
						<label>stadion</label>
						<input type="text" name="stadion" class="form-control" >
					</div>
					<div  class="form-group">
						<label>status</label>
						 <select class="form-control select2" name="status" style="width: 100%;">
			                    <option selected="selected">aktif</option>
			                    <option> aktif</option>
			                    <option>tidak aktif</option>
			                  </select>
					</div>
						<a href="<?php echo base_url('stadion/index'); ?>" class="btn btn-primary">kembali </a>
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
 