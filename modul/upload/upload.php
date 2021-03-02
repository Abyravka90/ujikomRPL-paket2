<?php 
//identifikasi nama file
include '../../config/constant.php';
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

//directory pindah
$dirFile = '../../assets/upload/';

//pindahkan file
$suksesUpload = move_uploaded_file($namaSementara, $dirFile.$namaFile);

$foto = 'assets/upload/25.PNG';
//kalau upload sukses
if($suksesUpload){
    echo 'berhasil upload <br/>';
    echo '<a href='.$dirFile.$namaFile.'>'.$namaFile.'</a>';
    echo '<table border=1>
    <tr>
        <th>
        No
        </th>
        <th>
        Pengaduan
        </th>
        <th>
        Foto
        </th>
    </tr>
    <tr>
        <td>1</td>
        <td>jalan Rusak</td>
        <td><img src="http://localhost/ujikomRPL/'.$foto.'"></img></td>
    </tr>
    </table>';
}else{
    echo 'gagal';
}
?>