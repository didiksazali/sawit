<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$kode_sawit=$_GET['kode_sawit'];
	$row = mysqli_query($koneksi, "DELETE FROM sawit WHERE kode_sawit = '$kode_sawit'");
	header('location:sawit.php');
}

elseif ($act=='input'){
	$jenis_sawit = $_POST["jenis_sawit"];
	$harga_jual = $_POST["harga_jual"];
	$potongan = $_POST["potongan"];

	$sql = "INSERT INTO sawit VALUES ('','$jenis_sawit','$harga_jual', '$potongan')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:sawit.php');
	}
	else {echo "gagal";}

}

elseif ($act=='update'){
	$jenis_sawit = $_POST["jenis_sawit"];
	$kode_sawit = $_POST["kode_sawit"];
	$harga_jual = $_POST["harga_jual"];
	$potongan = $_POST["potongan"];

	$sql = "UPDATE sawit SET jenis_sawit='$jenis_sawit', harga_jual='$harga_jual', potongan='$potongan' WHERE kode_sawit='$kode_sawit'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:sawit.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
