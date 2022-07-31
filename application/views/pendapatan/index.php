<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Pendapatan</h3>
				<div class="box-tools">
				</div>
			</div>
			<div class="box-body table-responsive">
				<table class="table table-striped table-bordered" id="myTable">
					<thead>
						<tr>
							<th>No.</th>
							<th>Kode Antrian</th>
							<th>Tanggal</th>
							<th>Plat</th>
							<th>Paket</th>
							<th>Pendapatan</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach($pembayaran as $r){ ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $r['kode_antrian']; ?></td>
							<td><?php echo date('d-m-Y', strtotime($r['tanggal'])); ?></td>
							<td><?php echo $r['plat']; ?></td>
							<td><?php $paket = $this->db->get_where('paket',array('id_paket'=>$r['id_paket']))->row_array(); echo $paket['nama_paket']; ?>
							</td>
							<td align="right"><?php echo "Rp. ".number_format($paket['harga']); ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
