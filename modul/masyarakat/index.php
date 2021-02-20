<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';
if(!isset($_SESSION['username'])){
    echo '<script>alert("session is not defined");window,location.href= "http://'.$server.'modul/loginMasyarakat"</script>';
} else{ 
    $username = $_SESSION['username'];
    echo 'selamat datang '.$username;
}