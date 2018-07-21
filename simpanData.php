<?php
require_once "core/init.php";

if( isset($_POST['submit']) ){

    $kecamatan = strtoupper($_POST['kecamatan']); //fungsi convert to uppercase
    $tps   = $_POST['tps'];
    $desa   = strtoupper($_POST['desa']);
    $tondi = $_POST['tondi'];
    $tso   = $_POST['tso'];
    $rahmad  = $_POST['rahmad'];


    if(!empty(trim($kecamatan)) && !empty(trim($tps)) && !empty(trim($desa))){


        if (register_cek_tps($kecamatan,$tps, $desa) ){

     if ( register_user($kecamatan, $tps, $desa, $tondi, $tso, $rahmad)){
         echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({

            dismissible: true,
            opacity: .4,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal3').modal('open');
            });
            </script>"; //BERHASIL
     }else {
         echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({

            dismissible: true,
            opacity: .7,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal4').modal('open');
            });
            </script>"; //GAGAL DATABASE
     }
        }else {
            echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({

            dismissible: true,
            opacity: .8,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal1').modal('open');
            });
            </script>";//NIM SUDAH TERDAFTAR
        }

    } else {
        echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({

            dismissible: true,
            opacity: .8,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal2').modal('open');
            });
            </script>";//FORM TIDAK BOLEH KOSONG
    }
}
?>
