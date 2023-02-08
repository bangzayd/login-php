<?php
session_start();
include"koneksi.php";

$sesi=$_GET['sesi'];

if($sesi=='user'){
	$id=$_GET['id'];
	
	$query=mysqli_query($koneksi, "DELETE FROM user WHERE username='$id'");
	
	header('location:user.php');
	}else{
		echo'ERROR'.mysqli_error();
	}
?>