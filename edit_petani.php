<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Petani</title>
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
						$id_petani = $_GET['id_petani'];
						$sqlquery = "SELECT * FROM petani WHERE id_petani='$id_petani'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>
					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Petani</div>
						<div class='panel-body'>
							<form method='post' action='aksi_petani.php?act=update'>
								<div class='form-group'>
									<input type="hidden" name="id_petani" id="id_petani" value="<?php echo $row["id_petani"]; ?>">
									<label>Nama Petani</label>
									<input type='text' class='form-control' name='nama_petani' value="<?php echo $row["nama_petani"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Alamat Petani</label>
									<input type='text' class='form-control' name='alamat_petani' value="<?php echo $row["alamat_petani"]; ?>" required/>
								</div>
								<button type='input' name='update' class='btn btn-success'>Edit</button>
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
