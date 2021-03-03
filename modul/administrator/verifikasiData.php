<?php 
//ambil koneksi 
include '../../config/database.php';

//ambil data nik
$nik = $_GET['id'];

//lakukan pengecekan status
$status = mysqli_query($conn, "SELECT `status` from `masyarakat` WHERE `nik` = '$nik'") or die(mysqli_error($conn));
$row = mysqli_fetch_object($status);

//lakukan perubahan status aktivasi
if($row -> status == 'aktif')
{
    $result = mysqli_query($conn, "UPDATE `masyarakat` SET `status` = 'nonAktif' WHERE `nik` = '$nik' ") or die(mysqli_error($conn));
    if($result){
        echo '<script>alert("akun di non aktifkan");window.location.href="lihatRegistrasiMasyarakat.php"</script>';
    }
}else
{
    $result = mysqli_query($conn, "UPDATE `masyarakat` SET `status` = 'aktif' WHERE `nik` = '$nik' ") or die(mysqli_error($conn));
    if($result){
        echo '<script>alert("akun diaktifkan");window.location.href="lihatRegistrasiMasyarakat.php"</script>';
    }
}