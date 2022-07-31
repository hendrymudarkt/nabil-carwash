<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Paket</h3>
            </div>
            <?php echo form_open_multipart('paket/edit/'.$paket['id_paket']); ?>
          	<div class="box-body">
          		<div class="row clearfix">
      					<div class="col-md-6">
      						<label for="nama" class="control-label">Nama</label>
      						<div class="form-group">
      							<input type="text" name="nama" value="<?php echo $paket['nama_paket']; ?>" class="form-control" id="nama" />
      						</div>
      					</div>
      					<div class="col-md-6">
      						<label for="harga" class="control-label">Harga</label>
      						<div class="form-group">
      							<input type="number" name="harga" value="<?php echo $paket['harga']; ?>" class="form-control" id="harga" />
      						</div>
      					</div>
      					<div class="col-md-12">
      						<label for="keterangan" class="control-label">Keterangan</label>
      						<div class="form-group">
      							<textarea name="keterangan" id="keterangan" cols="30" rows="10" id="keterangan" class="form-control"><?php echo $paket['keterangan'] ?></textarea>
      						</div>
      					</div>
      				</div>
      			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
            	<a href="<?php echo site_url('paket/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
