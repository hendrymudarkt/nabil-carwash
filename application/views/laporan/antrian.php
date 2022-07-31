<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Laporan Antrian</h3>
				<div class="box-tools">
					<form method="post">
						<table>
							<tr>
								<td><input type="date" class="form-control" name="awal"></td>
								<td><input type="date" class="form-control" name="akhir" onchange="this.form>submit();">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div class="box-body table-responsive">
			<?php
				if (isset($_POST['akhir'])) { ?>
				<button class="btn btn-primary" name="cetak" onclick="printContent('div1')"><i class="fa fa-print"></i>
					Cetak</button>
				<div class="box-body" id="div1">
					<table width="100%">
						<tr>
							<td align="center" width="10%"><img src="<?php echo site_url('dist/img/logo.png') ?>" alt=""
									height="100px" width="100px"></td>
							<td align="center">
								<h1>NABIL CARWASH</h1>
							</td>
						</tr>
					</table>
					<hr>
					<b>Periode : <?php echo $_POST['awal']." s/d ".$_POST['akhir'] ?></b><br><br>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">No</th>
								<th>Kode Antrian</th>
								<th>Jam</th>
								<th>Tanggal</th>
								<th>Nomor Antri</th>
								<th>Nama</th>
								<th>No. Hp</th>
								<th>Plat</th>
								<th>Paket</th>
								<th>Pencuci</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$cetak = $this->db->query("SELECT * FROM antrian WHERE tanggal BETWEEN '$_POST[awal]' AND '$_POST[akhir]'")->result_array();
							foreach ($cetak as $c): ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $c['kode_antrian'] ?></td>
								<td><?php echo $c['jam']; ?></td>
								<td><?php echo date('d-m-Y', strtotime($c['tanggal'])); ?></td>
								<td><?php echo $c['nomor_antri'] ?></td>
								<td><?php echo $c['nama'] ?></td>
								<td><?php echo $c['no_hp'] ?></td>
								<td><?php echo $c['plat'] ?></td>
								<td><?php $paket = $this->db->get_where('paket',array('id_paket'=>$c['id_paket']))->row_array(); echo $paket['nama_paket']; ?>
								</td>
								<td><?php $pencuci = $this->db->get_where('pencuci',array('id_pencuci'=>$c['id_pencuci']))->row_array(); echo $pencuci['nama_pencuci']; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table><br><br>
					<div class="float-right">
						<table>
							<tr>
								<td align="center" colspan="3"><b>Padang, <?php echo date('d-m-Y') ?></b></td>
							</tr>
							<tr>
								<td align="center" colspan="3">&nbsp;</td>
							</tr>
							<tr>
								<td align="center" colspan="3">&nbsp;</td>
							</tr>
							<tr>
								<td align="center" colspan="3">&nbsp;</td>
							</tr>
							<tr>
								<td align="center" colspan="3">
									(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
								</td>
							</tr>
						</table>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

