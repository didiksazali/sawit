<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Data Buah</title>
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
					<div class='panel panel-success'>
						<div class='panel-heading'>Tambah Data Sawit</div>
						<div class='panel-body'>
							<form method='post' action='aksi_sawit.php?act=input'>
								<div class='form-group'>
									<label>Jenis Sawit</label>
									<input type='text' class='form-control' name='jenis_sawit' required/>
								</div>
								<div class='form-group'>
									<label>Harga Jual</label>
									<input type='text' class='form-control' name='harga_jual' required/>
								</div>
								<div class='form-group'>
									<label>Potongan</label>
									<input type='text' class='form-control' name='potongan' required/>
								</div>
								<button type='input' name='input' class='btn btn-success'>Simpan</button>
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
