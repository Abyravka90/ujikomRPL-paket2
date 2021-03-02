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
                    <table class="table table-striped" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Nik</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                            <td>1.</td>
                        </tr>
                    </tbody>
                    </table>
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