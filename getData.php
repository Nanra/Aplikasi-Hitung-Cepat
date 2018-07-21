<!-- Bagian Get Database -->
<?php
require_once "core/init.php";
$sqlPaslonSatu = "SELECT SUM(paslon_satu) AS suara_satu FROM datamasuk"; // Jumlahkan semua data Paslon 1
$sqlPaslonDua = "SELECT SUM(paslon_dua) AS suara_dua FROM datamasuk";
$sqlPaslonTiga = "SELECT SUM(paslon_tiga) AS suara_tiga FROM datamasuk";
$totalSuaraSatu = mysqli_query($link, $sqlPaslonSatu); //Eksekusi Query
$totalSuaraDua = mysqli_query($link, $sqlPaslonDua);
$totalSuaraTiga = mysqli_query($link, $sqlPaslonTiga);
$hasilSuaraSatu = $totalSuaraSatu->fetch_assoc(); // Mengambil value
$hasilSuaraDua = $totalSuaraDua->fetch_assoc();
$hasilSuaraTiga = $totalSuaraTiga->fetch_assoc();
$hasilTotal = $hasilSuaraSatu['suara_satu'] + $hasilSuaraDua['suara_dua'] + $hasilSuaraTiga['suara_tiga'];
// Menghitung Jumlah TPS Masuk
$sqlHitungTPS = "SELECT tps FROM datamasuk";
$eksekusiHitungTPS = mysqli_query($link, $sqlHitungTPS);
$jumlahTPSMasuk = mysqli_num_rows($eksekusiHitungTPS);
 ?>
