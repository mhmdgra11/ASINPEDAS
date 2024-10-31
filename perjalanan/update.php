<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_perjalanan'])) {
		$id_perjalanan        = mysqli_real_escape_string($db, trim($_POST['id_perjalanan']));
		$tempat               = mysqli_real_escape_string($db, trim($_POST['tempat']));
		$tanggal              = mysqli_real_escape_string($db, trim($_POST['tanggal']));
		$waktu                = $_POST['waktu'];
		$keterangan           = $_POST['keterangan'];
		$jenis_tugas          = $_POST['jenis_tugas'];
		
		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE user SET tempat 		        = '$tempat',
														tanggal 	    = '$tanggal',
														waktu 	        = '$waktu',
														keterangan 		= '$keterangan',
														jenis_tugas 	= '$jenis_tugas', 
												  WHERE id_perjalanan   = '$id_perjalanan'");
		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}
	}
}
