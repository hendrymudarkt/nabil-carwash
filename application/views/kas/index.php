<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <!-- <h3 class="box-title">Data Kas</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <span></span></a> 
                </div> -->
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Antrian</th>
                            <th>Waktu</th>
                            <th>Pendapatan</th>
                            <th>Pengeluaran</th>
                            <th>Keterangan</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($kas as $r){ ?>
                        <tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $r['kode_antrian']; ?></td>
    						<td><?php echo date('H:i d-m-Y', strtotime($r['tanggal'])); ?></td>
							<td><?php echo "Rp. ".number_format($r['pendapatan']) ?></td>
							<td><?php echo "Rp. ".number_format($r['pengeluaran']) ?></td>
							<td><?php echo $r['keterangan']; ?></td>
							<td><?php echo $r['jenis']; ?></td>
                        </tr>
					<?php @$total += $r['pendapatan']; @$total2 += $r['pengeluaran']; } ?>
                    </tbody>
				</table>
				<table width="30%">
					<tr>
						<td width="50%"><b>Total Pendapatan</b></td>
						<td>&nbsp;:</td>
						<td align="right"><?php echo "Rp. ".number_format(@$total); ?></td>
					</tr>
					<tr>
						<td><b>Total Pengeluaran</b></td>
						<td>&nbsp;:</td>
						<td align="right"><?php echo "Rp. ".number_format(@$total2); ?></td>
					</tr>
				</table>
            </div>
        </div>
    </div>
</div>
