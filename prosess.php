<?php 
// Koneksi ke Database
$koneksi = mysqli_connect("localhost","root","","db_rumahsakit");
//Cek Tombol Proses apakah sudah ditekan atau belum
if (isset($_POST ["proses"])) {
 	//Ambil data dari tiap elemen dalam form
 	$kode_pasien = $_POST['kode_pasien'];
 	$nama_pasien = $_POST['nama_pasien'];
 	$tanggal_masuk = $_POST['tanggal_masuk'];
 	$penyakit = $_POST['penyakit'];
    $dokter = $_POST['dokter'];
    $deskripsi = $_POST['deskripsi'];
 	//Query Insert Data
 	$query = "INSERT INTO tbl_pasien values ('$kode_pasien','$nama_pasien','$tanggal_masuk','$penyakit','$dokter','$deskripsi')";
 	$simpan = mysqli_query($koneksi, $query); 
 	//Pesan Data berhasil disimpan
 	if ($simpan) {
 		echo "<script>
 				alert ('Data Berhasil Disimpan');
                window.location.href='indexx.php';
 			  </script>";
 	} else {
 		echo "<script>
 				alert ('Data Gagal Disimpan');
                window.location.href='indexx.php';
 		      </script>";
 	}
 } 
?>


