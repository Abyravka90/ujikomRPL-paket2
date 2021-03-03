<?php 
session_start();
include '../../config/database.php';
include '../../config/constant.php';
include "../../config/header.php";
if(!isset($_SESSION['username'])){
    echo '<script>alert("session is not defined");window,location.href= "http://'.$server.'modul/loginMasyarakat"</script>';
} else{ if (isset($_GET['id'])){ 
    //AMBIL ID DARI TABEL PENGADUAN
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * from `petugas` WHERE `id_petugas` = '$id'") or die(mysqli_error($conn));
    $row = mysqli_fetch_object($result);
    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <h3 class="text-center">.:Edit Data Petugas:.</h3>
                        <div class="card">
                            <div class="card-body">
                                <form action="prosesEditDataPetugas.php" method="post" enctype = "multipart/form-data" > 
                                <input type="hidden" name="id" value="<?= $id ?>">                   
                                <div class="form-group">
                                    <label for="namaPetugas">Nama Petugas :</label>
                                    <input placeholder="isikan nama petugas..." value="<?= $row -> nama_petugas ?>" type="text" name="namaPetugas" id="namaPetugas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username :</label>
                                    <input type="text" name="username" id="username" value="<?= $row -> username ?>" placeholder="isikan username..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="text" name="password" id="password" value="<?= $row -> password ?>" placeholder="isikan password..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telepon :</label>
                                    <input type="number" name="telp" id="telp" value="<?= $row -> telp ?>" placeholder="isikan telepon..." class="form-control">
                                </div>
                                <input type="submit" value="simpan" class="btn btn-info">
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
<?php }
     include "../../config/footer.php"; 
    //akhir templates
}
/*<table class="table table-striped" id="datatable">
<thead>
<tr>
    <th>No</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1.</td>
    </tr>
</tbody>
</table>
*/