<?php include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>
<a href="logout.php">Log Out</a><br>
<a href="http://localhost/login-php/user/user.php">User</a><br>
Anda Login sebagai :<?php echo $_SESSION['level']; ?>
<?php } ?>