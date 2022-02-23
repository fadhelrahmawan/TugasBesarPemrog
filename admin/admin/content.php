<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";

// Bagian User
if ($_GET[module]=='home'){
  include "sidebar.php";
  include "modul/mod_home/home.php";
}
elseif ($_GET[module]=='modulhighlight'){
  include "sidebar.php";
  include "modul/mod_highlight/modulhighlight.php";
}

elseif ($_GET[module]=='modulsejarah'){
  include "sidebar.php";
  include "modul/mod_sejarah/modulsejarah.php";
}
elseif ($_GET[module]=='modulsejarahptt'){
  include "sidebar.php";
  include "modul/mod_sejarahptt/modulsejarahptt.php";
}

elseif ($_GET[module]=='modulsubsejarah'){
  include "sidebar.php";
  include "modul/mod_subsejarah/modulsubsejarah.php";
}

elseif ($_GET[module]=='modulformnarasi'){
  include "sidebar.php";
  include "modul/mod_formnarasi/modulformnarasi.php";
}
elseif ($_GET[module]=='modulkoleksisejarah'){
  include "sidebar.php";
  include "modul/mod_koleksisejarah/modulkoleksisejarah.php";
}
elseif ($_GET[module]=='modulkoleksiprangko'){
  include "sidebar.php";
  include "modul/mod_koleksiprangko/modulkoleksiprangko.php";
}
elseif ($_GET[module]=='modulkoleksiperalatan'){
  include "sidebar.php";
  include "modul/mod_koleksiperalatan/modulkoleksiperalatan.php";
}
elseif ($_GET[module]=='modulpengelolamuseum'){
  include "sidebar.php";
  include "modul/mod_modulpengelolamuseum/modulpengelolamuseum.php";
}
elseif ($_GET[module]=='modulpimpinan'){
  include "sidebar.php";
  include "modul/mod_pimpinan/modulpimpinan.php";
}
elseif ($_GET[module]=='kritikdansaran'){
  include "sidebar.php";
  include "modul/mod_kritikdansaran/kritikdansaran.php";
}
elseif ($_GET[module]=='modulinformasimuseum'){
  include "sidebar.php";
  include "modul/mod_informasimuseum/modulinformasimuseum.php";
}
elseif ($_GET[module]=='reservasi'){
  include "sidebar.php";
  include "modul/mod_reservasikunjungan/reservasi.php";
}


// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
