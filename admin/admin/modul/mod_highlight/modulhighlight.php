 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Highlight
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
$aksi="modul/mod_highlight/aksi_modulhighlight.php";
switch($_GET[act]){
  // Tampil Soal
  default:
    echo "<h2>Modul Highlight</h2>";
    $tampil=mysqli_query($config,"SELECT * FROM edit_highlight");


  // Tombol Tambah Foto
  $datafoto = mysqli_query($config,"SELECT * FROM edit_highlight");  
  $jumlah_foto = mysqli_num_rows($datafoto);
  if($jumlah_foto == 1) {
  echo "Jumlah highlight sudah mencapai maksimal";
  } else {
    echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah Highlight'
          onclick=\"window.location.href='?module=modulhighlight&act=tambahhighlight';\">";

  }
  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>No</th><th>Judul</th><th>Deskripsi</th><th>Aksi</th><th>View</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[judul]</td>
             <td align='center'>$r[deskripsi]</td>
             <td>
        <a href=?module=modulhighlight&act=edithighlight&id=$r[id]><i class='fa fa-pencil-square-o'></i></a> |
        <a href=$aksi?module=modulhighlight&act=hapus&id=$r[id]><i class='fa fa-trash'></i></a></td>
        <td> <a href='#' onclick=\"bukajendela('zoom2.php?id=$r[id]')\"><i class='fa fa-eye'></i></a></td>";

        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;


  // Form Tambah
  case "tambahhighlight":
    echo "<h2>Tambah Highlight</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=modulhighlight&act=input' enctype='multipart/form-data'>


                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Judul</label>
                          <div class='col-sm-10'>
                            <textarea name='judul' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                          <div class='col-sm-10'>
                            <input type=file name='fupload' size=100>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Deskripsi</label>
                          <div class='col-sm-10'>
                            <textarea name='deskripsi' style='width: 500px; height: 100px;'></textarea>
                          </div>
                        </div

                        
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-4'>
                        <input type=submit name=submit value=Simpan class='btn btn-primary'>
                        <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                        </div>
                        </div>
                  </form>";
     break;

  // Form Edit
  case "edithighlight":
    $edit=mysqli_query($config,"SELECT * FROM edit_highlight WHERE id='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "<h2>Edit Foto</h2>
          <form method=POST action=$aksi?module=modulhighlight&act=update class='form-horizontal' enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id]'>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Judul</label>
                          <div class='col-sm-10'>
                            <textarea name='judul' style='width: 500px; height: 100px;'>$r[judul]</textarea>
                          </div>
                        </div>";
                        if ($r[gambar]!=''){

                        echo "
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-10'>
                            <img src='../foto/$r[gambar]' style='width:800px; height: 600px;'>
                          </div>
                        </div>

                        ";
                        }
                        echo"
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                          <div class='col-sm-10'>
                            <input type=file name='fupload' size=100>
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

  case "viewhighlight":
    $view=mysqli_query($config,"SELECT * FROM edit_highlight WHERE id='$_GET[id]'");
    $t=mysqli_fetch_array($view);
    echo "<h2>Nama Foto :</h2>
    $t[nama]</br>";
          if ($t[gambar]!=''){
              echo "<img src='../foto/$t[gambar]' >";
          }
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

