<?php
require_once "core/init.php";
// Menghitung Jumlah TPS Masuk
$sqlHitungTPS = "SELECT tps FROM datamasuk";
$eksekusiHitungTPS = mysqli_query($link, $sqlHitungTPS);
$jumlahTPSMasuk = mysqli_num_rows($eksekusiHitungTPS);
 ?>
