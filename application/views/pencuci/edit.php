<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Pencuci</h3>
            </div>
            <?php echo form_open_multipart('pencuci/edit/'.$pencuci['id_pencuci']); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo $pencuci['nama_pencuci']; ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto" class="control-label">Foto</label>
						<div class="form-group">
							<input type="file" name="foto" value="<?php echo $pencuci['foto']; ?>" class="form-control" id="foto" />
							<img src="<?php echo base_url('foto/'.$pencuci['foto']) ?>" height="50%" width="50%">
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
            	<a href="<?php echo site_url('pencuci/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
