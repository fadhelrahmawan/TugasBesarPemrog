 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Sub Sejarah 
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
$aksi="modul/mod_subsejarah/aksi_modulsubsejarah.php";
switch($_GET[act]){
  // Tampil 
  default:
    echo "<h2>Modul Sub Sejarah </h2>";
    $tampil=mysqli_query($config,"SELECT * FROM edit_subsejarah_museum");


  // Tombol Tambah
  $datasejarah = mysqli_query($config,"SELECT * FROM edit_subsejarah_museum");  
  $jumlahsejarah = mysqli_num_rows($datasejarah);
  if($jumlahsejarah == 2) {
  echo "Jumlah Sejarah sudah mencapai maksimal";
  } else {
    echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah Sub Sejarah'
          onclick=\"window.location.href='?module=modulsubsejarah&act=tambahsubsejarah';\">";

  }
  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>Nama</th><th>Deskripsi</th><th>Aksi</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$r[judul]</td>
             <td>$r[deskripsi]</td>
             <td>
              <a href=?module=modulsubsejarah&act=editsubsejarah&id=$r[id]><i class='fa fa-pencil-square-o'></i></a> |
        <a href=$aksi?module=modulsubsejarah&act=hapus&id=$r[id]><i class='fa fa-trash'></i></a></td>
       ";

        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;


  // Form Tambah
  case "tambahsubsejarah":
    echo "<h2>Tambah Sub Sejarah</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=modulsubsejarah&act=input' enctype='multipart/form-data'>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Judul</label>
                          <div class='col-sm-10'>
                            <textarea name='judul' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Deskripsi</label>
                          <div class='col-sm-10'>
                            <textarea name='deskripsi' style='width: 500px; height: 100px;'></textarea>
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

      case "editsubsejarah":
      $edit=mysqli_query($config,"SELECT * FROM edit_subsejarah_museum WHERE id='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "<h2>Edit Sub Sejarah</h2>
          <form method=POST action=$aksi?module=modulsubsejarah&act=update class='form-horizontal' enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id]'>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Judul</label>
                          <div class='col-sm-10'>
                            <textarea name='judul' style='width: 500px; height: 100px;'>$r[judul]</textarea>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Deskripsi</label>
                          <div class='col-sm-10'>
                            <textarea name='deskripsi' style='width: 500px; height: 100px;'>$r[deskripsi]</textarea>
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
