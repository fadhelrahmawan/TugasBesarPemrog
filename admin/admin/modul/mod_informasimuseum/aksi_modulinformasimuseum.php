<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";


$module=$_GET[module];
$act=$_GET[act];

// Input data
if ($module=='modulinformasimuseum' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;


	 	mysqli_query($config,"INSERT INTO informasi_museum(lokasi,email,instagram,telfon)
	  				VALUES('$_POST[lokasi]','$_POST[email]','$_POST[instagram]','$_POST[telfon]')");
	 	  echo '<script language="javascript">
		alert("Input Data Berhasil");
		window.location="../../media.php?module='.$module.'";
		</script>';
		exit();
		
  
}
//Hapus
elseif ($module=='modulinformasimuseum' AND $act=='hapus') {
	mysqli_query($config,"DELETE FROM informasi_museum WHERE id='$_GET[id]'");
     echo '<script language="javascript">
	alert("Hapus Data Berhasil");
	window.location="../../media.php?module='.$module.'";
	</script>';
	exit();
}
// Update 
elseif ($module=='modulinformasimuseum' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;


    UploadBanner($nama_file_unik);
     mysqli_query($config,"UPDATE informasi_museum SET lokasi = '$_POST[lokasi]', email = '$_POST[email]', instagram = '$_POST[instagram]', telfon = '$_POST[telfon]'
                             WHERE id = '$_POST[id]'");
  
   echo '<script language="javascript">
	alert("Update Data Berhasil");
	window.location="../../media.php?module='.$module.'";
	</script>';
	exit();
}

}
?>