<?php 
include "../../config/database.php";
include "../../config/constant.php";

$username = $_POST['username'];
$pass = $_POST['password'];
$sqlDataAdmin = "SELECT username, `password`, `level` from `petugas` WHERE `username` = '$username' ";
$queryDataAdmin = mysqli_query($conn, $sqlDataAdmin);
if($queryDataAdmin){
    $row = mysqli_fetch_object($queryDataAdmin);
    if($username == $row -> username and $pass == $row -> password){
        if($row -> level == 'admin'){
            @session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = $level;
            header ("location:http://".$server."modul/verifikasi");
        }else if($row -> level == 'petugas'){
            @session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = $level;
            header ("location:http://".$server."modul/validasi");
        }else{
            echo '<script>alert("akun anda belum aktif hubungi admin");window.location.href="index.php";</script>';
        }
    } else{
        header ("location:index.php");
    }
}else {
    echo("Error description: " . mysqli_error($con));
}

