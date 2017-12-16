<?php
include("config.php");
include("fungsi/fungsi_indotgl.php");
include("fungsi/fungsi_rupiah.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
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
						<div class='panel-heading'>Laporan</div>
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Laporan Penjualan Kelapa Sawit</h3>
								<p>&nbsp;</p>
							</center>

							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th>No</th>
								  <th>Tanggal Transaksi</th>
								  <th>Nama Petani</th>
								  <th>Alamat</th>
								  <th>Jenis Buah </th>
								  <th>Harga Jual</th>
								  <th>Berat (Kg)</th>
								  <th>Potongan</th>
								  <th>Total</th>
								  <th>Bonus</th>
								</tr>
							  </thead>
							  <tbody>
								<?php
									$no = 1;
									$total_semua = 0;
									$sqlquery = "SELECT petani.*, sawit.*, transaksi.* FROM transaksi transaksi INNER JOIN petani petani ON transaksi.id_petani = petani.id_petani INNER JOIN sawit sawit ON transaksi.kode_sawit = sawit.kode_sawit ORDER BY transaksi.id_petani ASC";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
										$potongan = ($row["harga_jual"] * $row["berat"]) * ($row["potongan"] / 100);
										$total = ($row["harga_jual"] * $row["berat"]) - $potongan;
										$total_semua += $total;
										if ($total >= 100000){
											$bonus = "Topi";
											} else {
											$bonus = "Sepatu";
											}

								?>
								<tr>
								<td><?php echo $no ?></td>
								<td><?php echo tgl_indo($row["tanggal_transaksi"]);?></td>
								<td><?php echo $row["nama_petani"];?></td>
								<td><?php echo $row["alamat_petani"];?></td>
								<td><?php echo $row["jenis_sawit"];?></td>
								<td><?php echo rupiah($row["harga_jual"]);?></td>
								<td><?php echo $row["berat"];?></td>
								<td><?php echo rupiah($potongan);?></td>
								<td><?php echo rupiah($total);?></td>
								<td><?php echo $bonus;?></td>
								</tr>
								<?php
									$no++;}
								?>
								<tr>
								<td colspan='8'>Grand Total</td>
								<td colspan='2'><?php echo rupiah($total_semua); ?></td>
								</tr>
								<?php
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
							  </tbody>
							</table>
							<p>
							<div class='pull-right'>
							Pekanbaru, <?php echo tgl_indo($hari_ini); ?><br>
							<b><center>Manager Perusahaan</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Didik Sazali</center></b>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
