 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Kritik dan Saran 
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
$aksi="modul/mod_kritikdansaran/aksi_modulkritikdansaran.php";
switch($_GET[act]){
  // Tampil 
  default:
    echo "<h2>Modul Kritik dan Saran  </h2>";
    $tampil=mysqli_query($config,"SELECT * FROM form_kritik");

  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>Nama</th><th>Email</th><th>Subject</th><th>Pesan</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$r[nama]</td>
             <td>$r[email]</td>
             <td>$r[subject]</td>
             <td>$r[pesan]</td>
             
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
