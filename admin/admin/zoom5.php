<?php
  include "../config/koneksi.php";
		$view=mysqli_query($config,"SELECT * FROM tb_berita WHERE id='$_GET[id]'");
		$t=mysqli_fetch_array($view);
		echo "<h2>Nama Foto :
		$t[nama]</h2></br>";
          if ($t['gambar']!=''){
              echo "<img src='../foto/$t[gambar]'>";
          }

?>
