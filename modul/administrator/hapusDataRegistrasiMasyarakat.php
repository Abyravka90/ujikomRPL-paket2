<?php 
//ambil koneksi
include '../../config/database.php';

//ambil data dari id url
$nik = $_GET['id'];

//lakukan hapus data pada yang terpilih
$result = mysqli_query($conn, "DELETE from `masyarakat` WHERE nik = '$nik'") or die(mysqli_error($conn));

//jika berhasil dihapus
if($result){
    echo '<script>alert("data berhasil dihapus");window.location.href="lihatRegistrasiMasyarakat.php"</script>';
}