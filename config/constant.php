<?php 
@session_start();
//base_url();
$server = $_SERVER['HTTP_HOST'].'/ujikomRPL/';
// PRIVILEGES
if (isset($_SESSION['username'])){
    if($_SESSION['level'] == 'admin'){
        $sidebar = '
        <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="http://'.$server.'modul/administrator/lihatPetugas.php">Petugas</a><br>
                        <a href="http://'.$server.'modul/administrator/lihatRegistrasiMasyarakat.php">Verifikasi</a><br>
                        <a href="http://'.$server.'modul/logout/">logout</a><br>
                    </div>
                </div>
            </div>';
        
    }else if ($_SESSION['level'] == 'petugas'){
        $sidebar = '
        <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href=""http://'.$server.'modul/petugas/validasi.php"">Validasi</a><br>
                        <a href="http://'.$server.'modul/logout/">logout</a><br>
                    </div>
                </div>
            </div>';
        
    }else if ($_SESSION['level'] == 'masyarakat'){
        $sidebar = '
        <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <a href="http://'.$server.'modul/masyarakat/">Dashboard</a><br>
                        <a href="http://'.$server.'modul/masyarakat/pengaduan.php">Buat Pengaduan</a><br>
                        <a href="http://'.$server.'modul/masyarakat/lihatPengaduan.php">Lihat Pengaduan</a><br>
                        <a href="http://'.$server.'modul/logoutMasyarakat/">logout</a><br>
                    </div>
                </div>
            </div>';
    }
}
 
