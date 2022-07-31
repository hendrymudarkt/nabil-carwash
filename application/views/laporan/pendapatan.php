<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Laporan Pendapatan</h3>
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
								<th>Tanggal</th>
								<th>Bayar</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$cetak = $this->db->query("SELECT * FROM pembayaran WHERE DATE(tanggal) BETWEEN '$_POST[awal]' AND '$_POST[akhir]'")->result_array();
							foreach ($cetak as $c): ?>
							<tr>
								<td align="center"><?php echo $no++ ?></td>
								<td><?php echo $c['kode_antrian'] ?></td>
								<td><?php echo date('d-m-Y', strtotime($c['tanggal'])); ?></td>
								<td align="right"><?php echo "Rp. ".number_format($c['bayar']) ?></td>
							</tr>
							<?php @$total += $c['bayar']; endforeach; ?>
							<tr>
								<td colspan="3" align="center"><b>TOTAL</b></td>
								<td align="right"><?php echo "Rp. ".number_format($total) ?></td>
							</tr>
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

