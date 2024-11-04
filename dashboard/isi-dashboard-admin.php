<?php
include 'config/database.php';

$id_users = $_SESSION['id_user'];
$levels = $_SESSION['level'];
$jumlah_record1 = mysqli_query($db, "SELECT * FROM user WHERE id_user=$id_users") or die('Query Error : ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$nips = $data['nip'];
$usernames = $data['username'];
$jabatans = $data['jabatan'];
$bidangs = $data['bidang'];

// jumlah data
$jum_user = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user"));
$jum_user_admin = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user where level = 'admin'"));
$jum_user_pegawai = mysqli_num_rows(mysqli_query($db, "SELECT * FROM user where level = 'pegawai'"));

$jum_perjalanan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM perjalanan"));

$jum_laporan = mysqli_num_rows(mysqli_query($db, "SELECT * FROM laporan"));
$jum_laporan_selesai = mysqli_num_rows(mysqli_query($db, "SELECT * FROM laporan where status = 'selesai'"));
$jum_laporan_delay = mysqli_num_rows(mysqli_query($db, "SELECT * FROM laporan where status = 'delay'"));
$jum_laporan_batal = mysqli_num_rows(mysqli_query($db, "SELECT * FROM laporan where status = 'batal'"));


// alert dashboard admin

$waktu = gmdate("H:i", time() + 7 * 3600);
$t = explode(":", $waktu);
$jam = $t[0];
$menit = $t[1];

if ($jam >= 00 and $jam < 10) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Pagi";
    }
} else if ($jam >= 10 and $jam < 15) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Siang";
    }
} else if ($jam >= 15 and $jam < 18) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Sore";
    }
} else if ($jam >= 18 and $jam <= 24) {
    if ($menit > 00 and $menit < 60) {
        $ucapan = "Selamat Malam";
    }
} else {
    $ucapan = "Error";
}
