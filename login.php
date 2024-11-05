<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Id User dan Password tidak sesuai !</div>";
        } else if ($_GET['pesan'] == "logindulu") {
            echo "<div class='alert'>Silahkan Login dulu !</div>";
        }
    }
    ?> 
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-50">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<center><img src="src/images/ASINPEDAS1.png"width="230" height="auto" alt="login" rounded="100"></center>
			<h6 class="text-left mb-10"><b>Silahkan Login</b></h6>
			
			<form action="cek_login.php" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="id_user" name="id_user">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="**********"name="password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
						<input type="submit" class="btn btn-outline-primary btn-lg btn-block" value="M A S U K">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>