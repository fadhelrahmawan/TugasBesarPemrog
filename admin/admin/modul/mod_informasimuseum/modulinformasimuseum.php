 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Informasi Museum 
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
$aksi="modul/mod_informasimuseum/aksi_modulinformasimuseum.php";
switch($_GET[act]){
  // Tampil 
  default:
    echo "<h2>Modul Informasi Museum </h2>";
    $tampil=mysqli_query($config,"SELECT * FROM informasi_museum");


  // Tombol Tambah
  $info = mysqli_query($config,"SELECT * FROM informasi_museum");  
  $jumlahinfo = mysqli_num_rows($info);
  if($jumlahinfo == 1) {
  echo "Jumlah Informasi sudah mencapai maksimal";
  } else {
    echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah Informasi'
          onclick=\"window.location.href='?module=modulinformasimuseum&act=tambahform';\">";

  }
  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>Lokasi</th><th>Email</th><th>Instagram</th><th>No Telp</th><th>Aksi</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$r[lokasi]</td>
             <td>$r[email]</td>
             <td>$r[instagram]</td>
             <td>$r[telfon]</td>
             <td>
              <a href=?module=modulinformasimuseum&act=editform&id=$r[id]><i class='fa fa-pencil-square-o'></i></a> |
        <a href=$aksi?module=modulinformasimuseum&act=hapus&id=$r[id]><i class='fa fa-trash'></i></a></td>
       ";

        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;


  // Form Tambah
  case "tambahform":
    echo "<h2>Tambah Informasi Museum</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=modulinformasimuseum&act=input' enctype='multipart/form-data'>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Lokasi</label>
                          <div class='col-sm-10'>
                            <textarea name='lokasi' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
                          <div class='col-sm-10'>
                            <textarea name='email' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Instagram</label>
                          <div class='col-sm-10'>
                            <textarea name='instagram' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>No Telp</label>
                          <div class='col-sm-10'>
                            <textarea name='telfon' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>


                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-4'>
                        <input type=submit name=submit value=Simpan class='btn btn-primary'>
                        <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                        </div>
                        </div>
                  </form>";
     break;

      case "editform":
      $edit=mysqli_query($config,"SELECT * FROM informasi_museum WHERE id='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "<h2>Edit Sub Sejarah</h2>
          <form method=POST action=$aksi?module=modulinformasimuseum&act=update class='form-horizontal' enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id]'>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Lokasi</label>
                          <div class='col-sm-10'>
                            <textarea name='lokasi' style='width: 500px; height: 100px;'>$r[lokasi]</textarea>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
                          <div class='col-sm-10'>
                            <textarea name='email' style='width: 500px; height: 100px;'>$r[email]</textarea>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Instagram</label>
                          <div class='col-sm-10'>
                            <textarea name='instagram' style='width: 500px; height: 100px;'>$r[instagram]</textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>No Telp</label>
                          <div class='col-sm-10'>
                            <textarea name='telfon' style='width: 500px; height: 100px;'>$r[telfon]</textarea>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-4'>
                        <input type=submit name=submit value=Simpan class='btn btn-primary'>
                        <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                        </div>
                        </div>

        </form>";
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
