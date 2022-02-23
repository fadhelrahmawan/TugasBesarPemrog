<?php
  include "../config/koneksi.php";
		$view=mysqli_query($config,"SELECT * FROM tb_sambutan WHERE id='$_GET[id]'");
		$t=mysqli_fetch_array($view);
		echo "<h2>Nama Video :
		$t[nama]</h2></br>";
          if ($t['nama']!=''){
              echo "<video src='../foto/$t[nama]'>";
          }

?>
