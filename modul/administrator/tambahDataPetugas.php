<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';
include "../../config/header.php";
if(!isset($_SESSION['username'])){
    echo '<script>alert("session is not defined");window,location.href= "http://'.$server.'modul/loginMasyarakat"</script>';
} else{ 
    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <h3 class="text-center">.:Tambah Data Petugas:.</h3>
                        <div class="card">
                            <div class="card-body">
                                <form action="prosesTambahDataPetugas.php" method="post" enctype = "multipart/form-data" >                    
                                <div class="form-group">
                                    <label for="namaPetugas">Nama Petugas :</label>
                                    <input placeholder="isikan nama petugas..." type="text" name="namaPetugas" id="namaPetugas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" name="username" id="username" placeholder="isikan username..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="text" name="password" id="password" placeholder="isikan password..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telepon :</label>
                                    <input type="number" name="telp" id="telp" placeholder="isikan telepon..." class="form-control">
                                </div>
                                <input type="submit" value="simpan" class="btn btn-info">
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
<?php
     include "../../config/footer.php"; 
    //akhir templates
}
/*<table class="table table-striped" id="datatable">
<thead>
<tr>
    <th>No</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1.</td>
    </tr>
</tbody>
</table>
*/