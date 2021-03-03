<?php 
//ambil data dari database
include '../../config/database.php';

//ambil id dari link
$id = $_GET['id'];

//hapus datanya
$result = mysqli_query($conn, "DELETE from `petugas` WHERE id_petugas = '$id' ");
if($result){echo '<script>alert("data berhasil dihapus");window.location.href="lihatPetugas.php"</script>';}