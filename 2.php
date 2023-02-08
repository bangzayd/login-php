<?php include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>
<a href="logout.php">Log Out</a><br>
Anda Login sebagai :<?php echo $_SESSION['level']; ?>
<?php } ?>