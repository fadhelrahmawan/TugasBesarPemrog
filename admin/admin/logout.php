<?php
session_start();
session_destroy();
	echo '<script language="javascript">
	alert("Terima kasih . Anda Berhasil Logout");
	window.location="/museum/admin/admin/login.php";
	</script>';

?>