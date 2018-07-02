<?php require_once "view/header.php"; ?>
<div class="navbar-fixed">
        <nav class="teal accent-4">
            <!-- Menu Navbar -->
            <div class="container">
                <div class="nav-wrapper">
                    <a href="listdata.php" class="brand-logo">Menu List Data Masuk<i class="material-icons left">list</i></a>
                    <!-- Menu Desktop -->
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="admin/index.php">Kembali Ke Home<i class="material-icons left">business</i></a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Tutup Navbar -->
    </div>
    <!-- Navbar Fixed -->
<?php require_once "core/init.php"; ?>

<!-- ISI KONTENT -->
<br>
<div class="container">
<fieldset>
    <legend>
        <h3>Cari Data TPS</h3>
    </legend>
    <div style="margin-bottom:15px;">
        <form action="" method="post">
            <input type="text" name="input_cari" placeholder="Masukkan Kata Kunci" class="css-input" style="width:400px;" required/>
            <input type="submit" name="cari" value="Cari" class="btn"/>
            <div>
                    <p>Pilih Salah Satu Kata Kunci Dibawah ini:
                       <ol>
                        <li>Nama Desa</li>
                        <li>Nama Kecamatan</li>
                    </ol>
                </div>
        </form>
    </div>
  </fieldset>
  </div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row">
    <div class="col offset-s1">
      <a href="listdata.php" class="waves-effect waves-light btn-large"><i class="material-icons right">cached</i>Refreash Tabel</a>
    </div>
  </div>
<div id="listtabel" class="wrapper-align">
    <table border="1" class="striped bordered responsive-table">
        <tr style="background-color:#00bfa5;">
            <th>Kecamatan</th>
            <th>Nama Desa</th>
            <th>Nomor TPS</th>
            <th>Tondi-Syarifuddin</th>
            <th>TSO-AZP</th>
            <th>RPH-SEH</th>
        </tr>
        <?php

     global $link;
   $input_cari = @$_POST['input_cari'];
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysqli_query($link,"SELECT * FROM datamasuk WHERE kecamatan like '%$input_cari%' OR desa like '%$input_cari%'") or die (mysql_error());
    } else {
    $sql = mysqli_query($link,"SELECT * FROM datamasuk") or die (mysql_error());
    }
    } else {
    $sql = mysqli_query($link,"SELECT * FROM datamasuk") or die (mysql_error());
    }

   // mengecek data
   $cek = mysqli_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
        <tr>
            <!--muncul peringatan bahwa data tidak di temukan-->
            <td colspan="7" align="center" style="padding:10px;">
              <h4>Data Tidak Ditemukan</h4>
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
                 </script>
            </td>
        </tr>
        <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysqli_fetch_array($sql)) {

   ?>
            <tr>
                <td>
                    <?php echo $data['kecamatan'] ?>
                </td>
                <td>
                    <?php echo $data['desa'] ?>
                </td>
                <td align="center">
                    <?php echo $data['tps'] ?>
                </td>
                <td align="center">
                    <?php echo $data['paslon_satu'] ?>
                </td>
                <td align="center">
                    <?php echo $data['paslon_dua'] ?>
                </td>
                <td align="center">
                    <?php echo $data['paslon_tiga'] ?>
                </td>
            </tr>
            <?php

  }
 }
?>
    </table>
  </div>

</div>
<br>
<!-- Data Tidak Ada -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h5>Data Tidak Ditemukan</h5>
        <div class="divider"></div>
        <p>Data <b>BELUM TERSIMPAN</b> Di Database</p>
    </div>
    <div class="modal-footer">
        <a href="listdata.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>

<?php require_once "view/footer.php" ?>
