<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Pengeluaran</h3>
            </div>
            <?php echo form_open_multipart('pengeluaran/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
      					<div class="col-md-12">
      						<label for="keterangan" class="control-label">Keterangan</label>
      						<div class="form-group">
      							<textarea name="keterangan" id="keterangan" cols="30" rows="10" id="keterangan" class="form-control"></textarea>
      						</div>
						</div>
						<div class="col-md-6">
      						<label for="biaya" class="control-label">Uang Keluar</label>
      						<div class="form-group">
      							<input type="number" name="biaya" value="<?php echo $this->input->post('biaya'); ?>" class="form-control" id="biaya" />
      						</div>
      					</div>
      				</div>
      			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
            	<a href="<?php echo site_url('pengeluaran/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
