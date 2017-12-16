<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Sawit</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include("include/css.php"); ?>
	</head>
	<body>
		<header>
			<?php include("include/header.php"); ?>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>


					<?php
						$kode_sawit = $_GET['kode_sawit'];
						$sqlquery = "SELECT * FROM sawit WHERE kode_sawit='$kode_sawit'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>

					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Sawit</div>
						<div class='panel-body'>
							<form method='post' action='aksi_sawit.php?act=update'>
								<div class='form-group'>
								<input type="hidden" name="kode_sawit" id="kode_sawit" value="<?php echo $row["kode_sawit"]; ?>">
									<label>Jenis Sawit</label>
									<input type='text' class='form-control' name='jenis_sawit' value="<?php echo $row["jenis_sawit"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Harga Jual</label>
									<input type='text' class='form-control' name='harga_jual' value="<?php echo $row["harga_jual"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Potongan</label>
									<input type='text' class='form-control' name='potongan' value="<?php echo $row["potongan"]; ?>" required/>
								</div>
								<button type='input' name='input' class='btn btn-success'>Edit</button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
