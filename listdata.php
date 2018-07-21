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
    <?php include 'cariData.php'; ?>
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
