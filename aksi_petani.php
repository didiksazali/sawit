<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_petani=$_GET['id_petani'];
	$row = mysqli_query($koneksi, "DELETE FROM petani WHERE id_petani = '$id_petani'");
	header('location:petani.php');
}

elseif ($act=='input'){
	$nama_petani = $_POST["nama_petani"];
	$alamat_petani = $_POST["alamat_petani"];

	$sql = "INSERT INTO petani VALUES ('','$nama_petani','$alamat_petani')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:petani.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_petani = $_POST["id_petani"];
	$nama_petani = $_POST["nama_petani"];
	$alamat_petani = $_POST["alamat_petani"];

	$sql = "UPDATE petani SET nama_petani='$nama_petani', alamat_petani='$alamat_petani' WHERE id_petani='$id_petani'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:petani.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
