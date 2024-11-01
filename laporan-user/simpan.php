<?php
include 'config/database.php';

$id_penugasan  = $_POST['id_penugasan'];
$id_perjalanan  = $_POST['id_perjalanan'];
$status       = $_POST['status'];



$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:?page=tampil-penugasan&alert=1");
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'laporan/gambar/' . $rand . '_' . $filename);
        mysqli_query($db, "INSERT INTO laporan (id_penugasan, id_perjalanan, status,  foto) VALUES ('$id_penugasan', '$id_perjalanan', '$status', '$xx')");
        header("location:?page=tampil-penugasan&alert=2");
    } else {
        header("location:?page=tampil-penugasan&alert=1");
    }
}
