<?php 
session_start();
include '../../config/database.php';
include "../../config/header.php";
include '../../config/constant.php';
if(!isset($_SESSION['username'])){
    echo '<script>alert("session is not defined");window,location.href= "http://'.$server.'modul/login"</script>';
} else{ 
    $username = $_SESSION['username'];
    //echo 'selamat datang '.$username;
    
    //awal templates
    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Selamat Datang <?= $username ?> </h4>
                        <p>ini adalah aplikasi pengaduan masyarakat, admin bisa melakukan : </p>
                        <hr>
                        <p class="mb-0">1. Registrasi <br> 2. Kelola Data Petugas</p>
                        </div>
                    </div>
                    </div>
                    </div>
<?php
     include "../../config/footer.php"; 
    //akhir templates
}