 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EDIT DATA POSISI</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


   <section class="content">
      <div class="row ">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">EDIT Data Posisi</h3>
            </div>
            <div class="card-body">
            <?php foreach($posisi as $p) { ?>
			<form action="<?php echo base_url().'posisi/update'; ?>" method="post">
				<div  class="form-group">
					<label>NAMA POSISI</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $p->p_id ?>">
					<input type="text" name="posisi" class="form-control" value="<?php echo $p->p_nposisi ?>">
				</div>
				<div  class="form-group">
					<label>KETERANGAN</label>
					<input type="text" name="keterangan" class="form-control" value="<?php echo $p->p_ket?>">
				</div>
				<div  class="form-group">
					<label>STATUS</label>
					 <select class="form-control select2" name="status" value="<?php echo $p->p_stat ?>" style="width: 100%;">
			                <option selected="selected">aktif</option>
			                <option> aktif</option>
			                <option>tidak aktif</option>
			              </select>
				</div>
				<div  class="form-group">
					<label>TANGGAL</label>
					<input type="date" name="tgl" class="form-control" value="<?php echo $p->p_tgl ?>">
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
 