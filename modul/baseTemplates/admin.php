<?php include "../../config/header.php"; ?>
<?php include "../../config/constant.php"; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<h1 class="navbar-brand">Aplikasi Pengaduan Masyarakat</h1>
</nav>
<div class="container-fluid">
<div class="row">
    <?php echo sidebar; ?>
<div class="col-lg-9">
<div class="card">
    <div class="card-body">
        <div class="form-group">
            </form>
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="masukan nik">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama">
                <label for="username">username : </label>
                <input type="text" class="form-control" name="nik" id="username" placeholder="username">
                <label for="nik">Password</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="masukan password"><br>
                <input type="submit" class="btn btn-primary" value="daftar">
            <form action="">
        </div>
    </div>
</div>
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
<?php include "../../config/footer.php"; ?>