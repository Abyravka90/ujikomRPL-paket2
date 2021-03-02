<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';
$tglPengaduan = date('Y-m-d');
$nik = $_SESSION['nik'];
$isiLaporan = $_POST['isiLaporan'];
//upload gambar
$namaFile = $_FILES['berkasLaporan']['name'];
$tmpName = $_FILES['berkasLaporan']['tmp_name'];

//dirFile
$dirFile = '../../assets/upload/pengaduan/';
$suksesUpload = move_uploaded_file($tmpName, $dirFile.$namaFile);

//SIMPAN KE DATABASE
$sqlInsertLaporan = "INSERT INTO `pengaduan` (id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto, `status`) 
VALUES ('', '$tglPengaduan', '$nik', '$isiLaporan', '$namaFile', '0' )" ;
$suksesTambahData = mysqli_query($conn, $sqlInsertLaporan);
if(!$suksesTambahData AND !$suksesUpload)
{ 
    echo mysqli_error($conn); 
} else 
{ 
    echo '<script>alert("pengaduan sudah diajukan");window.location.href="http://'.$server.'modul/masyarakat/lihatPengaduan.php"</script>'; 
}