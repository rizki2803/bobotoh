 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA PEMAIN</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">EDIT Data Pemain</h3>
            </div>
            <div class="card-body">
            <?php foreach($pemain as $pm) { ?>
			<form action="<?php echo base_url().'pemain/update'; ?>" method="post">
					<div  class="form-group">
						<label>team</label>
						<input type="hidden" name="id" class="form-control" value="<?php echo $pm->pm_id ?>">
						<input type="text" name="team" class="form-control" value="<?php echo $pm->pm_team ?>">
					</div>
					<div  class="form-group">
						<label>posisi</label>
						<input type="text" name="posisi" class="form-control" value="<?php echo $pm->pm_posisi ?>" >
					</div>
					<div  class="form-group">
						<label>nama pemain</label>
						<input type="text" name="pemain" class="form-control" value="<?php echo $pm->pm_npemain ?>">
					</div>
					<div  class="form-group">
						<label>photo</label>
						<input type="text" name="photo" class="form-control" value="<?php echo $pm->pm_photo ?>" >
					</div>
					<div  class="form-group">
						<label>status</label>
						 <select class="form-control select2" name="status" style="width: 100%;" value="<?php echo $pm->pm_stat ?>">
			                    <option selected="selected">aktif</option>
			                    <option> aktif</option>
			                    <option>tidak aktif</option>
			                  </select>
					</div>
					<div  class="form-group">
						<label>TANGGAL</label>
						<input type="date" name="tgl" class="form-control" value="<?php echo $pm->pm_tgl ?>">
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