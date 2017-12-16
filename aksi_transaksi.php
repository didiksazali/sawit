<?php
include("config.php");

$act=$_GET['act'];

if ($act=='input'){
	$id_petani = $_POST['id_petani'];
	$kode_sawit = $_POST['kode_sawit'];
	$berat = $_POST['berat'];

	$sql = "INSERT INTO transaksi VALUES ('','$id_petani','$kode_sawit', '$berat', '$hari_ini')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:laporan.php');
	}
	else {echo "gagal";}

}




?>
