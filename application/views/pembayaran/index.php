<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pembayaran</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pembayaran/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <span></span></a> 
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Antrian</th>
                            <th>Nama</th>
                            <th>Plat</th>
                            <th>Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($pembayaran as $r){ ?>
                        <tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $r['kode_antrian']; ?></td>
    						<td><?php echo $r['nama']; ?></td>
    						<td><?php echo $r['plat']; ?></td>
    						<td><?php echo $r['nama_paket']; ?></td>
    						<td><?php echo "Rp. ".number_format($r['harga']); ?></td>
    						<td align="center">
                                <a href="<?php echo site_url('pembayaran/cetak/'.$r['id']); ?>" class="btn btn-default btn-xs"><span class="fa fa-print"></span></a> 
                                <a href="<?php echo site_url('pembayaran/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('Anda yakin untuk hapus data ini?')"><span class="fa fa-trash"></span></a> 
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
