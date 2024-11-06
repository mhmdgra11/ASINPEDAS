<br>

<?php
include "isi-dashboard-user.php";
?>

<h4><?php echo $ucapan . ", " . $usernames ?></h4>
<hr>
<div class="row">

	<div class="col-md-2">
	<div class="list-group">

<li class="list-group-item list-group-item-info" align=" center">
	<H1><b><?php echo $jum_penugasan; ?></b></H1>
</li>
<li class="list-group-item list-group-item-default" align=" center"><b>Penugasan</b></li>
</div>
</div>


<div class="col-md-7">
        <div class="list-group">
            <li class="list-group-item list-group-item-info" align=" center"><b>Laporan Penugasan</b></li>
            <li class="list-group-item">
                <b>Selesai</b> <?php echo $jum_penugasan_selesai; ?> dari <?php echo $jum_penugasan; ?> Penugasan.
            </li>

            <li class="list-group-item">
                <b>Delay</b> <?php echo $jum_laporan_delay; ?> dari <?php echo $jum_penugasan; ?> Penugasan.
            </li>

            <li class="list-group-item">
                <b>Batal</b> <?php echo $jum_laporan_batal; ?> dari <?php echo $jum_penugasan; ?> Penugasan.
            </li>
        </div>
    </div>
</div>