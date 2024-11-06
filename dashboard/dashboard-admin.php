<br>

<?php
include "isi-dashboard-admin.php";
?>

<h4><b><?php echo $ucapan . ", " . $usernames ?><b></h4>
<hr>
<div class="row">

    <div class="col-md-2">
        <div class="list-group">

            <li class="list-group-item list-group-item-info" align=" center">
                <H1><b><?php echo $jum_user; ?></b></H1>
            </li>
            <li class="list-group-item list-group-item-default" align=" center"><b>ACCOUNT</b></li>
            <li class="list-group-item"> <span class="badge btn btn-info"><?php echo $jum_user_pegawai; ?></span>Pegawai</li>
            <li class="list-group-item"> <span class="badge btn btn-info"><?php echo $jum_user_admin; ?></span>Admin</li>
        </div>
    </div>

	<div class="col-md-2">
	<div class="list-group">

<li class="list-group-item list-group-item-info" align=" center">
	<H1><b><?php echo $jum_perjalanan; ?></b></H1>
</li>
<li class="list-group-item list-group-item-default" align=" center"><b>Penugasan</b></li>
</div>
</div>


<div class="col-md-8">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>Laporan Penugasan</b></li>
            <li class="list-group-item ">
                <b>Selesai</b> <?php echo $jum_laporan_selesai; ?> dari <?php echo $jum_perjalanan; ?> Penugasan.
            </li>

            <li class="list-group-item">
                <b>Delay</b> <?php echo $jum_laporan_delay; ?> dari <?php echo $jum_perjalanan; ?> Penugasan.
            </li>

            <li class="list-group-item">
                <b>Batal</b> <?php echo $jum_laporan_batal; ?> dari <?php echo $jum_perjalanan; ?> Penugasan.
            </li>
        </div>
    </div>
</div>