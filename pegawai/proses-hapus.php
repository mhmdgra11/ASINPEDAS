<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id'])) {

	$id_user = $_GET['id'];

	// perintah query untuk menghapus data pada tabel
	$query = mysqli_query($db, "DELETE FROM user WHERE id_user='$id_user'");
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location:?page=tampil-data&alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location:?page=tampil-data&alert=1');
	}
}

