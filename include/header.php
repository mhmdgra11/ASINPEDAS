<?php
$jumlah_record1 = mysqli_query($db, "SELECT * FROM user  where id_user ='$_SESSION[id_user]'") or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($db));
$data = mysqli_fetch_assoc($jumlah_record1);
$niss = $data['nis'];
$namas = $data['username'];
?>
	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
				<img src="vendors/images/ASINPEDAS2.png" width="50" >
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-name">Aplikasi Sistem Informasi Manajmen Perjalanan Dinas</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item"><i class="icon-copy fa fa-user-circle-o" aria-hidden="true"></i><?php echo $_SESSION['id_user'] ." - ".$namas." - ". $_SESSION['level']; ?> </a>
					
						<a class="dropdown-item" href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>

					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>