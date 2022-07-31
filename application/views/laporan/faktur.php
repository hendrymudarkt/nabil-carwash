<body onload="window.print()">
    <div class="card-body" id="div1">
        <table width="100%">
            <tr>
                <td align="center">
					<h2>FAKTUR PEMBAYARAN <br> NABIL CARWASH</h2>
					<small>Kec. Batang Anai, Kota Padang, Sumatera Barat 25586<br>Jl. Raya Padang - Bukittinggi, Kasang</small>
                </td>
            </tr>
		</table>
		<hr>
		<table>
            <tr>
                <td>Kode Antrian</td>
                <td>:</td>
                <td><?php echo $cetak['kode_antrian'] ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?php echo date('d-m-Y', strtotime($cetak['tanggal'])) ?></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><?php echo date('H:i', strtotime($cetak['jam'])) ?></td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><?php echo $cetak['nama'] ?></td>
            </tr>
            <tr>
                <td>Nama Pencuci</td>
                <td>:</td>
                <td><?php echo $cetak['nama_pencuci'] ?></td>
            </tr>
            <tr>
                <td>Plat Kendaraan</td>
                <td>:</td>
                <td><?php echo $cetak['plat'] ?></td>
            </tr>
            <tr>
                <td>Jenis Cucian</td>
                <td>:</td>
                <td><?php echo $cetak['nama_paket'] ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo "Rp. ".number_format($cetak['harga']) ?></td>
            </tr>
        </table>
        <div style="float: right">
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
                        Pimpinan
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
