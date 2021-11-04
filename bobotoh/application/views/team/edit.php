 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA TEAM</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">EDIT Data Team</h3>
            </div>
            <div class="card-body">
            <?php foreach($team as $tm) { ?>
		<form action="<?php echo base_url().'team/update'; ?>" method="post">
		<div  class="form-group">
			<label>team</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $tm->t_id ?>">
			<input type="text" name="team" class="form-control" value="<?php echo $tm->t_team ?>">
		</div>
		<div  class="form-group">
			<label>logo</label>
			<input type="text" name="logo" class="form-control" value="<?php echo $tm->t_logo ?>">
		</div>
		<div  class="form-group">
			<label>posisi</label>
			 <select class="form-control select2" name="status" value="<?php echo $tm->t_status ?>" style="width: 100%;">
                    <option selected="selected">aktif</option>
                    <option> aktif</option>
                    <option>tidak aktif</option>
                  </select>
		</div>
		<div  class="form-group">
			<label>tanggal</label>
			<input type="date" name="tgl" class="form-control" value="<?php echo $tm->t_tgl ?>">
		</div>

		<button type="reset" class="btn btn-danger">reset</button>
		<button type="submit" class="btn btn-primary">simpan</button>
		</form>
		<?php } ?>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
  </div>


