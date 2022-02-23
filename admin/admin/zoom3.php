<?php
  include "../config/koneksi.php";
		$view=mysqli_query($config,"SELECT * FROM tbl_jurnal WHERE id_jurnal='$_GET[id]'");
		$t=mysqli_fetch_array($view);
		echo "<h2>Nama Jurnal :
		$t[nama_jurnal]</h2></br>";
          if ($t['gambar']!=''){
              echo "<img src='../foto/$t[gambar]'>";
          }
		echo "<h2>Link : $t[link]</h2>";

?>
