 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Reservasi Kunjungan
                        </div>
                        <div class="panel-body">

<script language="JavaScript">
function bukajendela(url) {
 window.open(url, "window_baru", "width=800,height=500,left=120,top=10,resizable=1,scrollbars=1");
}
</script>

<?php
include "../../../config/koneksi.php";
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
switch($_GET[act]){
  // Tampil 
  default:
    echo "<h2>Modul Reservasi Kunjungan  </h2>";
    $tampil=mysqli_query($config,"SELECT * FROM reservasi_kunjungan");

  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>Nama</th><th>Jumlah Pengunjung</th><th>Tanggal Kunjungan</th><th>Pembelian Prangko</th><th>Kontak</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$r[nama]</td>
             <td>$r[jumlah_pengunjung]</td>
             <td>$r[tanggal_kunjungan]</td>
             <td>$r[pembelian_prangko]</td>
             <td>$r[kontak]</td>
       ";

        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;


  }
}
?>
                        </div>
                        <div class="panel-footer">

                        </div>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
