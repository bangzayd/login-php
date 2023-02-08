<?php session_start(); include"koneksi.php";?>
		<?php 
		if($_SESSION['level']=='root'){ 
			$query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username");
			?>
			<?php include"1.php";?>
		<?php }
		else if($_SESSION['level']=='admin'){
			?>
			<?php include"2.php";?>
		<?php }
		else if($_SESSION['level']=='operator'){
			?>
			<?php include"3.php";?>	
			<?php
		}else{
			echo"Anda tidak berhak untuk melihat halaman ini";	
		}
	 ?>