<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_perjalanan'])) {
		$id_perjalanan        = mysqli_real_escape_string($db, trim($_POST['id_perjalanan']));
		$tempat  			  = $_POST['tempat'];
		$tanggal  			  = $_POST['tanggal'];
		$waktu  			  = $_POST['waktu'];
		$jenis_tugas   		  = $_POST['jenis_tugas'];
		$keterangan   		  = $_POST['keterangan'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE perjalanan SET tempat 	  = '$tempat',
														tanggal 	  = '$tanggal',
														waktu         = '$waktu',
														jenis_tugas   = '$jenis_tugas',
														keterangan 	  = '$keterangan'
												  WHERE id_perjalanan = '$id_perjalanan'");
		// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: ?page=perjalanan-tampil&alert=3');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: ?page=perjalanan-tampil&alert=1');
	}
}
}