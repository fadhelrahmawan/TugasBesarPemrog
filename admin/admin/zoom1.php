<?php
  include "../config/koneksi.php";
		$view=mysqli_query($config,"SELECT * FROM tbl_modul,tbl_modulprak WHERE tbl_modul.id_modul='$_GET[id]' AND tbl_modul.id_modulprak = tbl_modulprak.id_modul");
		$t=mysqli_fetch_array($view);
		echo "<h2>Modul :
		$t[nama_modul]</h2>";
          if ($t['gambar']!=''){
              echo "<img src='../foto/$t[gambar]'>";
          }
		echo"<h2>Pilihan Tes :
	  $t[pilihan_tes] </h2> ";
		echo "<h2>Password : $t[password]</h2>";

?>
