<?php 
//ambil nilai database
include '../../config/database.php';

//ambil data dari form
$id = $_POST['id'];
$namaPetugas = $_POST['namaPetugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

//update data pada tabel
$result = mysqli_query($conn, "UPDATE `petugas` SET `nama_petugas` = '$namaPetugas', `username` = '$username', `password` = '$password' 
,`telp` = '$telp' WHERE `id_petugas` = '$id' ") or die(mysqli_error($conn));

//jika berhasil kembali ke laman petugas
if($result){ echo '<script>alert("Data berhasil dirubah");window.location.href="lihatPetugas.php"</script>';}
