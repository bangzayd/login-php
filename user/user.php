<?php session_start(); include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>

<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
<a href="../home.php">Home</a>
  <table class="table table-bordered table-striped table-condensed">
   <tr class="info">
    <th colspan="5" class="text-center">User</th>
  </tr>
  <tr>
    <th style="text-align: center">Username</th>
    <th style="text-align: center">Nama Admin</th>
    <th style="text-align: center">Level Admin</th>
    <th style="text-align: center">Action</th>
  </tr>
    <tfoot>
    <tr class="info">
      <th colspan="5" class="text-center"><a href="tambah_user.php">Tambah User</a></th>
    </tr>
  </tfoot>
<?php 
	include('koneksi.php');
			$query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username");
		?>
<?php 
while($data=mysqli_fetch_array($query)){
echo '<tr>';
echo '<td style="text-align: center">'.$data['username'].'</td>';
echo '<td style="text-align: center">'.$data['nama'].'</td>';
echo '<td style="text-align: center">'.$data['level'].'</td>';
echo '<td style="text-align: center"><a href="edit_user.php?id='.$data['username'].'">Edit</a> / <a href="delete.php?sesi=user&id='.$data['username'].'">Delete</a></td>';
}
?>
</table>
</div>
<?php } ?>