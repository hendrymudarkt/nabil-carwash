<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Admin</h3>
            </div>
			<?php echo form_open('admin/edit/'.$admin['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $admin['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $admin['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $this->encryption->decrypt($admin['password'])); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="level" class="control-label">Level</label>
						<div class="form-group">
							<select name="level" class="form-control">
								<option value="<?php echo $admin['level'] ?>"><?php echo $admin['level'] ?></option>
								<option value="1">Administrator</option>
								<option value="2">Pimpinan</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Simpan
				</button>
				<a href="<?php echo site_url('admin/index'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span> Kembali</a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
