<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Rumah Sakit</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
	<h2>Form Input Data Pasien - RS.BONG KVN</h2>
	<table border="1" cellspacing="0" cellpadding="8" bgcolor="F0E68C">
		<tr>
			<th>No</th>
		    <th>Kode Pasien</th>
		    <th>Nama Pasien</th>
		    <th>Tanggal Masuk</th>
		    <th>Penyakit</th>
		    <th>Dokter</th>
		    <th>Deskripsi</th>
		    <th>Aksi</th>
		</tr>
		<?php
		$koneksi = mysqli_connect ("localhost","root","","db_rumahsakit");
		$ambildata = mysqli_query ($koneksi, "SELECT * FROM tbl_pasien");

		$no=1;
		while ($tampil = mysqli_fetch_array ($ambildata)) { ?>
            <tr>
            	<td><?php echo $no ?></td>
            	<td><?php echo $tampil ["kode_pasien"]; ?></td>
            	<td><?php echo $tampil ["nama_pasien"]; ?></td>
            	<td><?php echo $tampil ["tanggal_masuk"]; ?></td>
            	<td><?php echo $tampil ["penyakit"]; ?></td>
            	<td><?php echo $tampil ["dokter"]; ?></td>
            	<td><?php echo $tampil ["deskripsi"]; ?></td>
            	<td>
            		<a href="edit.php?id=<?php echo $tampil["kode_pasien"]; ?>">Ubah</a> |
            		<a href="hapus.php?id=<?php echo $tampil["kode_pasien"]; ?>">Hapus</a>
            	</td>
            </tr>
        <?php $no++; } ?>
    </table>
    <br>
    <center><button class="tombol1"><a href="indexx.php">Tambah Data Pasien</button></a></center>
	</center>
</body>
</html>