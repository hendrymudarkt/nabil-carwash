<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pencuci</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pencuci/add'); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> <span></span></a> 
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($pencuci as $p){ ?>
                        <tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $p['nama_pencuci']; ?></td>
                            <td><center><img src="<?php echo base_url('foto/'.$p['foto']) ?>" height="20%" width="20%"></center></td>
    						<td align="center">
                                <a href="<?php echo site_url('pencuci/edit/'.$p['id_pencuci']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a> 
                                <a href="<?php echo site_url('pencuci/remove/'.$p['id_pencuci']); ?>" onclick="javascript: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
