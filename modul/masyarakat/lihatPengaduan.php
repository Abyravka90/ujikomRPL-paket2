<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';
include "../../config/header.php";
if(!isset($_SESSION['username'])){
    echo '<script>alert("session is not defined");window,location.href= "http://'.$server.'modul/loginMasyarakat"</script>';
} else{ 
    $username = $_SESSION['username'];
    ?>              
                    <style>
                    .red{color:red;}
                    .img-circle{
                        border-radius:100%;
                        border:1px solid;
                        width:100px;
                        height:100px;
                    }
                    </style>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <table class="table table-striped" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Nik</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $nik = $_SESSION['nik'];
                        $sqlPengaduan = "SELECT * FROM `pengaduan` WHERE `nik` = $nik";
                        $result = mysqli_query($conn, $sqlPengaduan);
                        if(!$result)
                        {
                            echo mysqli_error($conn);
                        }else
                        {   $i = 1;
                            while ($row = mysqli_fetch_object($result))
                            {
                                echo "<tr>
                                        <td>".$i."</td>
                                        <td>".$row -> tgl_pengaduan." </td>
                                        <td>".$row -> nik."</td>
                                        <td>".$row -> isi_laporan."</td>
                                        <td><img class='img-circle' src='../../assets/upload/pengaduan/".$row -> foto."'></img></td>
                                        <td>".$row -> status."</td>
                                        <td><a href = 'editData.php?id=".$row -> id_pengaduan."'>edit</a> | <a class='red' href = 'hapusData.php?id=".$row -> id_pengaduan."'>hapus</a></td>
                                      </tr>";
                                      $i++;
                            }
                        }
                    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
<?php
     include "../../config/footer.php"; 
    //akhir templates
}