<!DOCTYPE html>
<html>
<head>
	<title>PDAM Kota Batusangkar</title>
</head>
<body onload="window.print()">
	<center><h2>Tiket Pengaduan PDAM Tirta Alami Batusangkar</h2></center>
<table>
	<tr>
		<td>Tanggal</td>
		<td>;</td>
		<td><?php echo date('d-m-Y', strtotime($_POST['tanggal'])) ?></td>
	</tr>
	<tr>
		<td>No Tiket</td>
		<td>;</td>
		<td><?php echo $_POST['no_pam'] ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>;</td>
		<td><?php echo $_POST['nama'] ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>;</td>
		<td><?php echo $_POST['alamat'] ?></td>
	</tr>
	<tr>
		<td>Cabang</td>
		<td>;</td>
		<td><?php echo $_POST['cabang'] ?></td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td>;</td>
		<td><?php echo $_POST['telepon'] ?></td>
	</tr>
	<tr>
		<td>Uraian Masalah</td>
		<td>;</td>
		<td><?php echo $_POST['uraian'] ?></td>
	</tr>
	<tr>
		<td>Ringkasan Masalah</td>
		<td>;</td>
		<td><?php echo $_POST['ringkasan_masalah'] ?></td>
	</tr>
</table>
<br><br><br>
*Harap simpan bukti pengaduan ini<br>
Username : <?php echo $_POST['username'] ?><br>
Password : <?php echo $_POST['username'] ?>
</body>
</html>