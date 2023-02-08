<?php session_start(); include"koneksi.php";?>
<?php include"00-head.php";?>

<div class="container">
<table class="display" style="width:100%">
    <thead>
        <tr>
			<th>Informasi Program</th>
        </tr>
    </thead>
    <tbody>
	<form class="form-signin" action="validasi.php" method="POST">
		<tr>
            <td><input type="text" name="username" placeholder="Nama User" required autofocus></td>
		</tr>
		<tr>
            <td><input type="password" name="password" placeholder="Sandi" required autofocus></td>
		</tr>
		<tr>
			<td><button>Sign in</button></td>
        </tr>
		
	</form>
    </tbody>
</table>
</div>
<br/>
<?php
// menampilkan validasi jika username atau password salah
if(isset($_SESSION['pesan'])){
echo $_SESSION['pesan'];
unset($_SESSION['pesan']); //unset untuk menghilangkan pesan "jika tidak unset makan pesan 'Username atau Password salah' akan tampil terus"
}
else{
// apabila login gagal lanjut tampilkan form login
}

?>

<br/>
<?php
$a = 'nilai apapun';
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Jika Variabel $b ada nilainya maka pesan ini tampil";
}

?>


<?php
$x = "Hello world!";
echo "The value of variable 'a' before unset: " . $x . "<br>";
unset($x);
echo "The value of variable 'a' after unset: " . @$x . "<br>";
?>




<?php
$y = null; // bisa berupa "nilai" atau null
if(isset($y)){
echo $y;
unset($y);
}
else{
  echo "null bro";
}
?>