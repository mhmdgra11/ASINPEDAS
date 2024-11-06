<?php
// Panggil koneksi database
include 'config/database.php';
// var_dump($db); // Untuk debugging - comment this out or remove it once done debugging

if (isset($_POST['simpan'])) {
    $id_user     = mysqli_real_escape_string($db, trim($_POST['id_user']));
    $username    = mysqli_real_escape_string($db, trim($_POST['username']));
    $password    = mysqli_real_escape_string($db, trim($_POST['password']));
    $jabatan     = $_POST['jabatan'];
    $bidang      = $_POST['bidang'];
    $telp        = $_POST['telp'];
    $email       = $_POST['email'];
    $level       = $_POST['level'];
    $nip         = mysqli_real_escape_string($db, trim($_POST['nip']));

    // perintah query untuk menyimpan data ke tabel user
    $query = mysqli_query($db, "INSERT INTO user(id_user, username, password, jabatan, bidang, telp, email, level, nip) 
                                VALUES ('$id_user', '$username', '$password', '$jabatan', '$bidang', '$telp', '$email', '$level', '$nip')");

    if ($query) {
        // jika berhasil, arahkan ke halaman tampil-data dengan alert=3
        header('Location: ?page=tampil-data&alert=3');
        exit; // It's a good practice to call exit after header redirect
    } else {
        // jika gagal, arahkan ke halaman tampil-data dengan alert=1
        header('Location: ?page=tampil-data&alert=1');
        exit; // Again, exit after the redirect
    }
}
?>
