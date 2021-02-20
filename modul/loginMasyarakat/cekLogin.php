<?php 
include "../../config/database.php";
include "../../config/constant.php";
$NIK = $_POST['NIK'];
$username = $_POST['username'];
$pass = $_POST['password'];

$sqlDataMasyarakat = "SELECT username, `password`, `status` from `masyarakat` WHERE `nik` = $NIK ";
$queryDataMasyarakat = mysqli_query($conn, $sqlDataMasyarakat);
$row = mysqli_fetch_object($queryDataMasyarakat);

if($username == $row -> username and $pass = $row -> password){
    if($row -> status == 'aktif'){
        @session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header ("location:http://".$server."modul/masyarakat");
    }else{
        echo '<script>alert("akun anda belum aktif hubungi admin");window.location.href="index.php";</script>';
    }
} else{
    header ("location:index.php");
}
