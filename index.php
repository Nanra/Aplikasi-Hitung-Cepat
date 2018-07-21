<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
<html>
<!-- Mirrored from 192.185.228.226/projects/ma/1-5-1/jquery/other-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2015 05:37:17 GMT -->
<head>
        <meta http-equiv="refresh" content="30">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hitung Cepat Real Count Pilkada Padang Lawas 2018</title>

        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/tondi.png">
        <link href="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- Jam -->
        <link rel="stylesheet" href="css/jam.css">
		    <script src="js/jam.js"></script>
        <script src="js/charts.js"></script>
        <script src="js/functions.js"></script>
        <!-- <script src="js/demo.js"></script> -->

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
    </head>

    <body>
      <?php include "getData.php"; ?>
        <header id="header">
          <div class="container"><h1 style="text-align: center; color: white;"> HASIL HITUNG CEPAT SUARA SAH PILKADA KAB. PADANG LAWAS 2018 </h1></div>
        </header>
        <section id="main">
            <section id="content">
                <div class="container">
                    <div class="block-header">
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="epc-item bgm-blue">
                              <!-- Hitung Persentasi -->
                              <?php
                              if ($hasilTotal == 0){ // Mengatasi Zero Division Warning
                                $persenSatu = 0;
                                $persenDua = 0;
                                $persenTiga = 0;
                              }else {
                              $persenSatu = number_format(($hasilSuaraSatu['suara_satu']/$hasilTotal*100),2);
                              $persenDua = number_format(($hasilSuaraDua['suara_dua']/$hasilTotal*100),2);
                              $persenTiga = number_format(($hasilSuaraTiga['suara_tiga']/$hasilTotal*100),2);
                               }?>
                                <div class="easy-pie main-pie" data-percent="<?php echo $persenSatu;?>">
                                    <div class="percent"><?php echo $persenSatu;?></div>
                                </div>
                                <div  class="row"><h2 style="color: white;">TONDI - SYARIFUDDIN</h2></div>
                                <div class="pie-title" style="color: white;">Jumlah Suara</div>
                                <div  class="row"><h3 style="color: white;"><?php echo $hasilSuaraSatu['suara_satu'];?></h3></div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="epc-item bgm-orange">
                                <div class="easy-pie main-pie" data-percent="<?php echo $persenDua;?>">
                                    <div class="percent"><?php echo $persenDua;?></div>
                                </div>
                                <div  class="row"><h2 style="color: white;">TSO-AZP</h2></div>
                                <div class="pie-title" style="color: white;">Jumlah Suara</div>
                                <div  class="row"><h3 style="color: white;"> <?php echo $hasilSuaraDua['suara_dua'];?></h3></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="epc-item bgm-purple">
                                <div class="easy-pie main-pie" data-percent="<?php echo $persenTiga;?>">
                                    <div class="percent"><?php echo $persenTiga;?></div>
                                </div>
                                <div  class="row"><h2 style="color: white;">RPH - SEH</h2></div>
                                <div class="pie-title" style="color: white;">Jumlah Suara</div>
                                <div  class="row"><h3 style="color: white;"> <?php echo $hasilSuaraTiga['suara_tiga'];?></h3></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"><h3 style="color: black;">Total Suara Sah Masuk : <?php echo $hasilTotal;?></h3> </div>
                      <div class="col-sm-4">
                      <h3>Jumlah TPS Masuk : <?php echo $jumlahTPSMasuk;?> dari 499 </h3>
                     </div>
                     <!-- Jam -->
                     <div class=" col-sm-4 clock"></div>
                </div>
                    </div>
            </section>
        </section>

        <footer id="footer">
          HORAS MEDIA CENTER &copy; <?php echo date('Y'); ?><br>
            Dibuat oleh: Nanra Hasibuan
        </footer>
    </body>

<!-- Mirrored from 192.185.228.226/projects/ma/1-5-1/jquery/other-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2015 05:37:17 GMT -->
</html>
