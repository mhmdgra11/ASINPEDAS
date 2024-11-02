<?php

// Data user (pegawai)
if (empty($_GET["page"])) {
    include "laporan-user/tampil-penugasan.php";

// laporan
}else if ($_GET['page'] == 'tampil-penugasan') {
    include "laporan-user/tampil-penugasan.php";
}else if ($_GET['page'] == 'tambah-laporan') {
    include "laporan-user/tambah.php";
} else if ($_GET['page'] == 'simpan-laporan') {
    include "laporan-user/simpan.php";
} else if ($_GET['page'] == 'hapus-laporan') {
    include "laporan-user/php";
}else if ($_GET['page'] == 'tampil-laporan') {
    include "laporan-user/tampil-laporan.php";
}

// laporan
else if ($_GET['page'] == 'tampil-laporan-user') {
    include "laporan-user/tampil-laporan.php";
} elseif ($_GET['page'] == 'tambah-status-user') {
    include "laporan-user/tambah-status.php";
} elseif ($_GET['page'] == 'simpan-laporan-user') {
    include "laporan-user/simpan.php";
} elseif ($_GET['page'] == 'perjalanan-detail-user') {
    include "laporan-user/detail.php";
}