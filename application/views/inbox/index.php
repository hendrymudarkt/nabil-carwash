<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pesan Masuk</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nomor Pengirim</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; foreach($inbox as $i){ ?>
                        <tr>
    						<td><?php echo $no++; ?></td>
    						<td><?php echo $i['ReceivingDateTime']; ?></td>
                            <td><?php echo $i['SenderNumber']; ?></td>
                            <td><?php echo $i['TextDecoded']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
