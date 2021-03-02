<?php 
include '../../config/database.php';
include '../../config/constant.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT `foto` from pengaduan WHERE id_pengaduan = '$id'") or die(mysqli_error($conn));
$row = mysqli_fetch_object($result);
unlink('../../assets/upload/pengaduan/'.$row -> foto.'');
$resultDelete = mysqli_query($conn, "DELETE from pengaduan WHERE id_pengaduan = '$id'") or die(mysqli_error($conn));
if($resultDelete)
{
    echo '<script>alert("data berhasil dihapus");window.location.href="lihatPengaduan.php"</script>';
}