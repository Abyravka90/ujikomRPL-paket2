<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';

//ambil id nya
$id = $_POST['id'];
$tglPengaduan = date('Y-m-d');
$nik = $_SESSION['nik'];
$isiLaporan = $_POST['isiLaporan'];

//upload gambar
$fileSize = $_FILES['berkasLaporan']['size'];
$namaFile = $_FILES['berkasLaporan']['name'];
$tmpName = $_FILES['berkasLaporan']['tmp_name'];

//jika filenya ada
if($fileSize > 0)
{
    //mengecek keberadaan file
    $result = mysqli_query($conn, "SELECT `foto` from pengaduan WHERE id_pengaduan = '$id'") or die(mysqli_error($conn));
    $row = mysqli_fetch_object($result);
    
    //hapus foto yang ada di directory
    unlink('../../assets/upload/pengaduan/'.$row -> foto.'');

    //dirFile
    $dirFile = '../../assets/upload/pengaduan/';
    $suksesUpload = move_uploaded_file($tmpName, $dirFile.$namaFile);

    //UPDATE KE TABLE
    $resultLaporan = mysqli_query($conn, "UPDATE `pengaduan` SET tgl_pengaduan = '$tglPengaduan',
     isi_laporan = '$isiLaporan', foto = '$namaFile' WHERE id_pengaduan = '$id'") or die(mysqli_error($conn));
    
    if($resultLaporan AND $suksesUpload){ 
        echo '<script>alert("pengaduan sudah diubah");window.location.href="lihatPengaduan.php"</script>'; 
        
    } else { 
        echo mysqli_error($conn); 
    }
}else{
    //Kalau data uploadnya nggak berubah
    //UPDATE KE TABLE
    $resultLaporan = mysqli_query($conn, "UPDATE `pengaduan` SET tgl_pengaduan = '$tglPengaduan',
     isi_laporan = '$isiLaporan' WHERE id_pengaduan = '$id'") or die(mysqli_error($conn));
    
    if($resultLaporan){ 
        echo '<script>alert("pengaduan sudah diubah");window.location.href="lihatPengaduan.php"</script>'; 
        
    } else { 
        echo mysqli_error($conn); 
    }
}