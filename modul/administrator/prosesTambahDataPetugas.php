<?php
//ambil dari database
include '../../config/database.php';

//ambil data dari form
$namaPetugas = $_POST['namaPetugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telepon = $_POST['telp'];

//insert data ke database
$result = mysqli_query($conn, "INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`)
VALUES ('','$namaPetugas', '$username', '$password', '$telepon', 'petugas')") or die(mysqli_error($conn));

//jika data berhasil diinput
if($result){
    echo '<script>alert("Data Berhasil Ditambahkan");window.location.href="lihatPetugas.php"</script>';
}