<?php session_start(); include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>

<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
  <table class="table table-bordered table-striped table-condensed">
<?PHP
// apa bila login berhasil tampilkan Pesan 
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	
	?>
	 <?php
 $id=$_GET['id'];
 
 $data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$id'"));
 ?>   
<tr class="info">
      <th colspan="2" class="text-center">Tambah Data Pelanggan</th>
</tr>
	<form method="POST" action="">
    <tr>
    <td style="text-align: right">Nama</td>
        <td><input type="text"  name="nama" value="<?php echo $data['nama'] ?>"></td>
       </tr>
 <tr>
 <td style="text-align: right">Username</td>
		<td> <input type="text"  name="username" value="<?php echo $data['username'] ?>"></td>
		</tr>
<tr>
<td style="text-align: right">Pasword</td>
		<td><input type="password"  name="password"></td>
		</tr>
<tr>
<td style="text-align: right">Level</td>
		<td><select name="level">
<option <?php echo $data['level'] == "root"  ? 'selected="selected"' : '';?> value="root">Super Admin</option>
			<option <?php echo $data['level'] == "admin"  ? 'selected="selected"' : '';?> value="admin">Admin</option>
			<option <?php echo $data['level'] == "operator"  ? 'selected="selected"' : '';?> value="operator">Operator</option>
		</select></td>
</td>
</tr>		
<tr> 
<td>&nbsp;</td>
<td>
<button type="submit">Edit</button>
</td>
</tr>
	</form>

<?php } ?>
<?php 
if($_POST){
	$id=$data['username'];
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$level=$_POST['level'];
	
	if($pass==''){
		$password=$data['password'];
	}else{
		$password=md5($pass);
	}
	
	$insert=mysqli_query($koneksi, "UPDATE user SET username='$username',password='$password',nama='$nama',level='$level' WHERE username='$id'");
	
	if($insert){
		header('location:user.php');
	}else{
		echo'ERROR'.mysqli_error();
	}
}
?>
</table>
</div>

<?php } ?>