<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<style>
    @media print {
      .print {
        display: none;
      }
    }
  </style>
</head>
<body>
<?php
  session_start();

  if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
  }
  ?>


	<?php include('include/header.php'); ?>
	<?php include('menu/menu.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				<?php
    if ($_SESSION['level'] == "admin") {
      include 'routes/admin-routes.php';
    } else if ($_SESSION['level'] == "pegawai") {
      include 'routes/user-routes.php';
    }
    ?>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>