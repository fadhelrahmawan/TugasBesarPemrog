 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Koleksi Peralatan
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
$aksi="modul/mod_koleksiperalatan/aksi_modulkoleksiperalatan.php";
switch($_GET[act]){
  // Tampil Soal
  default:
    echo "<h2>Modul Koleksi Peralatan</h2>";
    $tampil=mysqli_query($config,"SELECT * FROM koleksi_peralatan");


  // Tombol Tambah 

    echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah Koleksi Peralatan'
          onclick=\"window.location.href='?module=modulkoleksiperalatan&act=tambahform';\">";
  

  //Form Pencarian Data
  //Tampil Data
     echo" <table class='table table-striped table-bordered table-hover' style='margin-top:20px'>
          <tr><th>No</th><th>Nama Koleksi</th><th>Jenis</th><th>Tahun</th><th>Aksi</th><th>View</th></tr>";
    
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[nama_koleksi]</td>
             <td>$r[jenis]</td>
             <td>$r[tahun]</td>
             <td>
        <a href=?module=modulkoleksiperalatan&act=editform&id=$r[id]><i class='fa fa-pencil-square-o'></i></a> |
        <a href=$aksi?module=modulkoleksiperalatan&act=hapus&id=$r[id]><i class='fa fa-trash'></i></a></td>
        <td> <a href='#' onclick=\"bukajendela('zoom7.php?id=$r[id]')\"><i class='fa fa-eye'></i></a></td>";

        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;


  // Form Tambah 
  case "tambahform":
    echo "<h2>Tambah Koleksi Peralatan</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=modulkoleksiperalatan&act=input' enctype='multipart/form-data'>


                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Nama Koleksi</label>
                          <div class='col-sm-10'>
                            <textarea name='nama_koleksi' style='width: 500px; height: 100px;' required></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Deskripsi</label>
                          <div class='col-sm-10'>
                            <textarea name='deskripsi' style='width: 500px; height: 100px;' required></textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Jenis</label>
                          <div class='col-sm-10'>
                            <select name='jenis' style='width: 500px;' required>
                            <option value =''>Pilih</option>
                            <option value ='Brievenbus'>Brievenbus</option>
                            <option value ='Bis Surat'>Bis Surat</option>
                            <option value ='Pakaian Dinas'>Pakaian Dinas</option>
                            <option value ='Peralatan'>Peralatan</option>
                            </select>
                          </div>
                        </div>

                         <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Tahun</label>
                          <div class='col-sm-10'>
                            <textarea name='tahun' style='width: 500px; height: 100px;' maxlength='4' required></textarea>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                          <div class='col-sm-10'>
                            <input type=file name='fupload' size=100 required> 
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

  // Form Edit Foto
  case "editform":
    $edit=mysqli_query($config,"SELECT * FROM koleksi_peralatan WHERE id='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "<h2>Edit Koleksi Peralatan</h2>
          <form method=POST action=$aksi?module=modulkoleksiperalatan&act=update class='form-horizontal' enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id]'>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Nama Koleksi</label>
                          <div class='col-sm-10'>
                            <textarea name='nama_koleksi' style='width: 500px; height: 100px;' required>$r[nama_koleksi]</textarea>
                          </div>
                        </div>
                      <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Deskripsi</label>
                          <div class='col-sm-10'>
                            <textarea name='deskripsi' style='width: 500px; height: 100px;' required>$r[deskripsi]</textarea>
                          </div>
                        </div>

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Jenis</label>
                          <div class='col-sm-10'>
                            <select name='jenis' style='width: 500px;' required>
                            <option value ='$r[jenis]'>Saat ini : $r[jenis]</option>
                            <option value ='Brievenbus'>Brievenbus</option>
                            <option value ='Bis Surat'>Bis Surat</option>
                            <option value ='Pakaian Dinas'>Pakaian Dinas</option>
                            <option value ='Peralatan'>Peralatan</option>
                            </select>
                         </div>
                        </div>
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Tahun</label>
                          <div class='col-sm-10'>
                            <textarea name='tahun' style='width: 500px; height: 100px;' required>$r[tahun]</textarea>
                          </div>
                        </div>
                        ";
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
                            <input type=file name='fupload' size=100 required>
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

  case "viewfoto":
    $view=mysqli_query($config,"SELECT * FROM koleksi_peralatan WHERE id='$_GET[id]'");
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

