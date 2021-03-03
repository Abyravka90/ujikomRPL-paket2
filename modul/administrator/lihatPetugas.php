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
                    .red{color:white;}
                    </style>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <button class="btn btn-info float-right" type="button" onClick="location.href='tambahDataPetugas.php'">+ tambah data</button>
                    <table class="table table-striped" id="datatable">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>telepon</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sqlPetugas = "SELECT * FROM `petugas`";
                        $result = mysqli_query($conn, $sqlPetugas);
                        if(!$result)
                        {
                            echo mysqli_error($conn);
                        }else
                        {   $i = 1;
                            while ($row = mysqli_fetch_object($result))
                            {
                                echo "<tr>
                                        <td>".$i."</td>
                                        <td>".$row -> nama_petugas." </td>
                                        <td>".$row -> username."</td>
                                        <td>".$row -> password."</td>
                                        <td>".$row -> telp."</td>
                                        <td><a class='btn btn-primary' href = 'editPetugas.php?id=".$row -> id_petugas."'>edit</a> | <a class='btn btn-danger white' href = 'prosesHapusDataPetugas.php?id=".$row -> id_petugas."'>hapus</a></td>
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