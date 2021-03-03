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
                    <h2 class="text-center">.:Data Registrasi Masyarakat:.</h2>
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped" id="datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Petugas</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>telepon</th>
                                        <th>aktivasi</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sqlMasyarakat = "SELECT * FROM `masyarakat`";
                                        $result = mysqli_query($conn, $sqlMasyarakat);
                                        if(!$result)
                                        {
                                            echo mysqli_error($conn);
                                        }else
                                        {   $i = 1;
                                            while ($row = mysqli_fetch_object($result))
                                            {
                                                echo "<tr>
                                                        <td>".$i."</td>
                                                        <td>".$row -> nik." </td>
                                                        <td>".$row -> nama."</td>
                                                        <td>".$row -> username."</td>
                                                        <td>".$row -> telp."</td>
                                                        <td>"; if($row -> status == 'nonAktif'){
                                                            echo '<a class="btn btn-warning" href="verifikasiData.php?id='.$row -> nik.'">'.$row -> status.'</a>';
                                                        } else {
                                                            echo '<a class="btn btn-success" href="verifikasiData.php?id='.$row -> nik.'">'.$row -> status.'</a>';
                                                        }
                                                        echo "</td>
                                                        <td><a class='btn btn-danger white' href = 'prosesHapusDataRegistrasi.php?id=".$row -> nik."'>hapus</a></td>
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
                    </div>
                    </div>
<?php
     include "../../config/footer.php"; 
    //akhir templates
}