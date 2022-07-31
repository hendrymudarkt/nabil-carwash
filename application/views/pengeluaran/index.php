<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pengeluaran</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pengeluaran/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <span></span></a> 
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Keterangan</th>
                            <th>Uang Keluar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($pengeluaran as $r){ ?>
                        <tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $r['keterangan']; ?></td>
    						<td><?php echo "Rp. ".number_format($r['biaya']); ?></td>
    						<td align="center">
                                <!-- <a href="<?php echo site_url('pengeluaran/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>  -->
                                <a href="<?php echo site_url('pengeluaran/remove/'.$r['id']); ?>" onclick="javascript: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
