<?php session_start(); include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
?>

<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
     <table class="table table-bordered table-striped table-condensed" >
        <tr class="info">
      <th colspan="2" class="text-center">Tambah Data Pelanggan</th>
    </tr>
      <form method="POST" action="">
        <tr>
          <td style="text-align: right">Nama</td>
          <td><input type="text" name="nama" required="" ></td>
        </tr>
        <tr>
          <td style="text-align: right">Username</td>
          <td> <input type="text" name="username"></td>
        </tr>
        <tr>
          <td style="text-align: right">Password</td>
          <td><input type="password"  name="password"></td>
        </tr>
        <tr>
          <td style="text-align: right">Level</td>
          <td>
            <select name="level">
              <option value="root">Super Admin</option>
              <option value="admin">Admin</option>
              <option value="operator">Operator</option>
            </select></td>
          </td>
        </tr>		
        <tr> 
          <td>&nbsp;</td>
          <td><input type="submit" name="tambah" value="Tambah"></td>
        </tr>
      </form>
    <?php 
    if($_POST){
      $nama=$_POST['nama'];
      $username=$_POST['username'];
      $password=md5($_POST['password']);
      $level=$_POST['level'];
      $insert=mysqli_query($koneksi, "INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");
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