<?php 
session_start();
session_destroy();
include "../../config/constant.php";
echo '<script>alert("anda berhasil logout");
window,location.href= "http://'.$server.'modul/login"</script>';
?>