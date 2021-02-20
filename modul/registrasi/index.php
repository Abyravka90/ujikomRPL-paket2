<?php 
include '../../config/database.php'; 
include '../../config/header.php';
include '../../config/constant.php'; 

//JIKA TOMBOL SIMPAN DI KLIK
if(isset($_POST['NIK'])){
    $nik = $_POST['NIK'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

    $sqlInsertDataMasyarakat = "INSERT INTO `masyarakat` VALUES('$nik', '$nama', '$username', '$password', '$telp', 'nonAktif')";
    $result = mysqli_query($conn, $sqlInsertDataMasyarakat);
    if($result){
        echo "<script>alert('berhasil disimpan tunggu di aktifkan');window.location.reload();</script>";
    } else {
        echo "<script>alert('gagal simpan data');</script>";
    }
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                        <h1>.:REGISTRASI MASYARAKAT:.</h1>
                        <form action="" method="post">
                            
                                <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input class="form-control" type="text" name="NIK" id="NIK" placeholder = "Masukan data NIK">
                                </div>
                                <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" id="nama" placeholder = "Masukan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                <label for="username">username</label>
                                <input class="form-control" type="text" name="username" id="username" placeholder = "Masukan Username">
                                </div>
                                <div class="form-group">
                                <label for="pass">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder = "Masukan Password">
                                </div>
                                <div class="form-group">
                                <label for="telp">Telepon</label>
                                <input class="form-control" type="number" name="telp" id="telp" placeholder = "Masukan Telepon">
                                </div>
                                <input class="btn btn-info" type="submit" value="daftar">
                                <a href="http://<?= $server ?>" class="btn btn-warning">menu login</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../../config/footer.php'; ?>
