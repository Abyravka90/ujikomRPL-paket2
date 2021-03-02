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
    $result = mysqli_query($conn, "SELECT * from `pengaduan` WHERE `id_pengaduan` = '$id'") or die(mysqli_error($conn));
    $row = mysqli_fetch_object($result);
    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
                    </nav>
                    <div class="container-fluid">
                    <div class="row">
                        <?= $sidebar ?>
                    <div class="col-lg-9">
                    <div class="form-group">
                    <form action="prosesEdit.php" method="post" enctype = "multipart/form-data" >
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?= $row -> id_pengaduan ?>">
                    <label for="isiLaporan">Isi Laporan : </label>
                        <textarea placeholder="Isikan Laporan anda disini..." name="isiLaporan" id="isiLaporan" cols="30" rows="10" class="form-control"><?= $row -> isi_laporan ?></textarea>
                    </div>
                    <div class="form-group">    
                        <label for="berkasLaporan">Unggah Foto Pengaduan</label>                
                        <input id="berkasLaporan" type="file" name="berkasLaporan" class="form-control">
                    </div>
                        <input type="submit" value="simpan" class="btn btn-info">
                    </form>
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