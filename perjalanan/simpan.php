<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['id_perjalanan'])) {
	$id_perjalanan = $_POST['id_perjalanan'];
                $tempat  = $_POST['tempat'];
                $tanggal   = $_POST['tanggal'];
                $waktu   = $_POST['waktu'];
                $jenis_tugas   = $_POST['jenis_tugas'];
                $keterangan   = $_POST['keterangan'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO perjalanan (id_perjalanan, tempat, tanggal, waktu, jenis_tugas, keterangan) VALUES('$id_perjalanan','$tempat','$tanggal','$waktu','$jenis_tugas','$keterangan')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=perjalanan-tampil&alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=perjalanan-tampil&alert=1');
	}
}
