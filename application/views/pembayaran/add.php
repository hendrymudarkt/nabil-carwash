<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tambah Pembayaran</h3>
            </div>
            <?php echo form_open_multipart('pembayaran/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
      					<div class="col-md-6">
      						<label for="kode_antrian" class="control-label">Kode Antrian</label>
      						<div class="form-group">
      							<select name="kode_antrian" class="form-control" id="id_antrian">
									<option value="0">...</option>
									<?php
									$qry = $this->db->query("SELECT * FROM antrian WHERE kode_antrian NOT IN (SELECT kode_antrian FROM pembayaran)")->result_array();
									foreach ($qry as $p) { ?>
									<option value="<?php echo $p['kode_antrian'] ?>"><?php echo $p['kode_antrian'] ?></option>
									<?php } ?>
								</select>
      						</div>
      					</div>
      					<div class="col-md-6">
      						<label for="nama" class="control-label">Nama</label>
      						<div class="form-group">
      							<input type="text" name="nama" class="form-control" id="nama" readonly />
      						</div>
      					</div>
      					<div class="col-md-6">
      						<label for="plat" class="control-label">Plat Mobil</label>
      						<div class="form-group">
      							<input type="text" name="plat" class="form-control" id="plat" readonly />
      						</div>
      					</div>
      					<div class="col-md-6">
      						<label for="harga" class="control-label">Harga</label>
      						<div class="form-group">
      							<input type="text" name="harga" class="form-control" id="harga" readonly />
      						</div>
      					</div>
      					<div class="col-md-6">
      						<label for="bayar" class="control-label">Bayar</label>
      						<div class="form-group">
      							<input type="number" name="bayar" value="<?php echo $this->input->post('bayar'); ?>" class="form-control" id="bayar" />
      						</div>
      					</div>
      				</div>
      			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Simpan
            	</button>
            	<a href="<?php echo site_url('pembayaran/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
