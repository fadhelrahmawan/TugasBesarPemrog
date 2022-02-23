<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];

$qry=mysqli_query($config,"SELECT * FROM login_admin WHERE username='$username' AND password='$password'");
$r=mysqli_fetch_array($qry);

if ($username == $r['username'] && $password == $r['password']) {
	// code...
	session_start();
	$_SESSION['username']= $r['username'];
	$_SESSION['idadmin']= $r['id_admin'];
	header('location:media.php?module=home');
}
else {
	echo '<script language="javascript">
	alert("Userid atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
	window.location="index.php";
	</script>';
	exit();
}
}
?>
