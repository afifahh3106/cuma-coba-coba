<!DOCTYPE html>          
<html>
<head>
	<title>Sistem Informasi Rumah Sakit</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center><h2>Form Input Data Pasien - RS.BONG KVN</h2></center>
	<div class="login">
		<form action="prosess.php" method="POST" onSubmit="validasi()">
			<div>
				<label>Kode Pasien:</label>
				<input type="text" name="kode_pasien" id="kode_pasien">
			</div>
			<div>
				<label>Nama Pasien:</label>
				<input type="text" name="nama_pasien" id="nama_pasien">
			</div>
			<div>
				<label>Tanggal Masuk:</label>
				<input type="text" name="tanggal_masuk" id="tanggal_masuk">
			</div>
			<div>
				<label>Penyakit:</label>
				<input type="text" name="penyakit" id="penyakit">
			</div>
			<div>
				<label>Dokter:</label>
				<input type="text" name="dokter" id="dokter">
			</div>
			<div>
				<label>Deskripsi:</label>
	<textarea onkeyup="document.getElementById('counter').innerText = this.value.length" cols="40" rows="5" name="deskripsi" id="deskripsi"></textarea>
            <p>Panjang: <span id="counter">0</span> karakter</p>
			</div>
			<div>
				<input type="submit" value="Simpan" name="proses" class="tombol">
			</div>
		</form>
	</div>
	<center><button class="tombol1"><a href="tampill.php">Lihat Data Pasien</button></a></center>
</body>
</html>

