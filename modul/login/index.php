<?php include "../../config/header.php"; //header?>
<?php include "../../config/constant.php"; //header?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 mx-auto">
            <div class="card mt-5">
                    <div class="card-body">
                    <h1 class="text-center">.:LOGIN ADMIN:.</h1>
                    <form action="cekLogin.php" method="post">
                    <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder ="masukan username">
                    </div>
                    <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder ="masukan password">
                    </div>
                            <input class="form-control btn btn-primary" type="submit" value="masuk">
                        </form>
                        <center>
                            <a href="http://<?= $server ?>modul/registrasi/">registrasi</a>
                        </center>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php include "../../config/footer.php"; //footer?>