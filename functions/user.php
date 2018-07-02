<?php

//Fungsi memasukkan data pendaftaran ke database
function register_user($kecamatan, $tps, $desa, $tondi, $tso, $rahmad){
    global $link; //Variabel Koneksi Database dijadikan Variabel Global


    //Mencegah sql_injection
    $kecamatan    = mysqli_real_escape_string($link, $kecamatan);
    $tps    = mysqli_real_escape_string($link, $tps);
    $desa    = mysqli_real_escape_string($link, $desa);
    $tondi     = mysqli_real_escape_string($link, $tondi);
    $tso   = mysqli_real_escape_string($link, $tso);
    $rahmad      = mysqli_real_escape_string($link, $rahmad);

    $query = "INSERT INTO datamasuk (kecamatan, tps, desa, paslon_satu, paslon_dua, paslon_tiga) VALUES ('$kecamatan','$tps', '$desa','$tondi','$tso','$rahmad')";

    if (mysqli_query($link, $query) ){
        return true;
    }else {
        return false;
    }
}


//Menguji user apakah sudah terdaftar sebelumnya, yang dijadikan penguji adalah NIM
function register_cek_tps($kecamatan, $tps, $desa) {
    global $link;
    $kecamatan       = mysqli_real_escape_string($link, $kecamatan);
    $tps       = mysqli_real_escape_string($link, $tps);
    $desa       = mysqli_real_escape_string($link, $desa);
    $query     = "SELECT * FROM datamasuk WHERE tps = '$tps' AND kecamatan = '$kecamatan' AND desa = '$desa'";
    if ($hasil = mysqli_query($link, $query) ){
        if (mysqli_num_rows($hasil) == 0) return true;
        else return false;
    }

}


//Mencari NIM & Pass User
// function cek_data($nim, $pass){
//
//     global $link;
//
//     //Mencegah sql_injection
//     $nama   = mysqli_real_escape_string($link, $nim);
//     $pass   = mysqli_real_escape_string($link, $pass);
//
//     $query  = "SELECT pass FROM user WHERE nim = '$nim'";
//     $result = mysqli_query($link, $query);
//     $passdb = mysqli_fetch_assoc($result)['pass'];
//     //die($hash);
//
//     //Digunakan untuk melihat password yang sudah di hash di database apakah ada
//     if ( $pass == $passdb ){
//         return true;
//     }else {
//         return false;
//     }
//
// }

?>
