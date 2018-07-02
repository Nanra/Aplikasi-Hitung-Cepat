<?php include_once "crud.php"; ?>

<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Nanra Sukedy Hasibuan">
    <link rel="icon" type="image/png" href="img/fav.png">
    <title>SINTA | SISTEM INFORMASI TUGAS AKHIR MAHASISWA TEKNIK KOMPUTER UNIKOM</title>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
</head>

<body>
    <!-- <br>
    <a href="editdata.php" title="EDIT DATA">
        <h1 class="center">EDIT DATA SUARA</h1>
    </a>
    <br> -->
    <fieldset>
        <legend>
            <h4>Menu Edit Data</h4>
        </legend>
    <div id="form">
        <form method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>
                        <div class="row">
                            <div class="input-field col s4">
                                <input name="camat" value="<?php if(isset($_GET['edit'])) echo $getROW['kecamatan'];  ?>"  type="text" class="validate" required>
                                <label class="active" for="nim">Kecamatan</label>
                            </div>


                            <div class="input-field col s4">
                                <input name="tepes" value="<?php if(isset($_GET['edit'])) echo $getROW['tps'];  ?>" id="penulis" type="number" min="1" class="validate" required>
                                <label class="active" for="penulis">Nomor TPS</label>
                            </div>

                            <div class="input-field col s4">
                                <input name="desa" value="<?php if(isset($_GET['edit'])) echo $getROW['desa'];  ?>" id="pembimbing" type="text" class="validate" required>
                                <label class="active" for="pembimbing">Nama Desa</label>
                            </div>


                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s4">
                                    <input name="tondi" value="<?php if(isset($_GET['edit'])) echo $getROW['paslon_satu'];  ?>" type="number" min="0" class="validate" required>
                                    <label class="active" for="judul">Tondi - Syarifuddin</label>
                                </div>
                                <div class="input-field col s4">
                                    <input name="tso" value="<?php if(isset($_GET['edit'])) echo $getROW['paslon_satu'];  ?>" type="number" min="0" class="validate" required>
                                    <label class="active" for="judul">TSO-AZP</label>
                                </div>
                                <div class="input-field col s4">
                                    <input name="rahmad" value="<?php if(isset($_GET['edit'])) echo $getROW['paslon_satu'];  ?>" type="number" min="0" class="validate" required>
                                    <label class="active" for="judul">RPH-SEH</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Button for UPDATE/SUBMIT -->
                <tr>
                    <td>
                        <?php
                                if(isset($_GET['edit']))
                                {
                                ?><table border="1" class="striped bordered responsive-table">
                            <button class="btn" type="submit" name="update">Simpan Data Baru <i class="material-icons right">send</i></button>
                            <?php
                                }
                                else
                                {
                                ?>
                                <a href="editdata.php" class="btn" type="submit" >Kembali Ke Home</a>
                                <?php
                                }
                                ?>
                    </td>
                </tr>
            </table>
        </form>

        <br><br>


</fieldset>
        </table>
    </div>



</body>

</html>
