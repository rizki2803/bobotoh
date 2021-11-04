 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA STADION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">EDIT Data STADION</h3>
            </div>
            <div class="card-body">
            <?php foreach($stadion as $st) { ?>
			<form action="<?php echo base_url().'stadion/update'; ?>" method="post">
				<div  class="form-group">
					<label>team</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $st->s_id ?>">
					<input type="text" name="team" class="form-control" value="<?php echo $st->s_team ?>">
				</div>
				<div  class="form-group">
					<label>stadion</label>
					<input type="text" name="stadion" class="form-control" value="<?php echo $st->s_stadion ?>">
				</div>
				<div  class="form-group">
					<label>status</label>
					 <select class="form-control select2" name="status" value="<?php echo $st->s_status ?>" style="width: 100%;">
		                    <option selected="selected">aktif</option>
		                    <option> aktif</option>
		                    <option>tidak aktif</option>
		                  </select>
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