<?php require_once "view/header.php"; ?>
<div class="navbar-fixed">
        <nav class="teal accent-4">
            <!-- Menu Navbar -->
            <div class="container">
                <div class="nav-wrapper">
                    <a href="inputdata.php" class="brand-logo">Menu Input Data Suara<i class="material-icons left">save</i></a>
                    <!-- Menu Desktop -->
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="admin/index.php">Kembali Ke Menu<i class="material-icons left">business</i></a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Tutup Navbar -->
    </div>
    <!-- Navbar Fixed -->
    <?php include "hitungTps.php"; ?>
<div class="row"></div>
<div class="text-lighten-5 container">
    <h4>Silahkan Masukkan Data Suara Dengan Benar</h4>
</div>
<?php include "simpanData.php"; ?>

<!-- FORM -->
<div class="container">
    <div class="row">
      <form class="col m12 s12 l12 container collection with-header" method="post" action="inputdata.php">
      <table class="responsive-table">
        <thead>
          <tr>
              <th>Kecamatan</th>
              <th>Nomor TPS</th>
              <th>Nama Desa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          </tr>
          <tr>
            <td>
              <div class="input-field col s12">
              <input placeholder="Masukkan Kecamatan" id="kecamatan" name="kecamatan" type="text" class="validate" required>
             </div>
            </td>
            <td>
              <div class="input-field col s12">
              <input placeholder="Nomor TPS" id="tps" name="tps" type="number" min="1" class="validate" required>
            </div>
            </td>
            <td>
              <div class="input-field col s12">
              <input placeholder="Nama Desa" id="desa" name="desa" type="text" class="validate" required>
            </div>
           </td>
          </tr>
        </tbody>
      <thead>
        <tr>
            <th>TONDI - SYARIFUDDIN</th>
            <th>TSO - AZP</th>
            <th>RPH - SEH</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        </tr>
        <tr>
          <td>
            <div class="input-field col s12">
            <input placeholder="Suara Paslon Nomor 1" id="tondi" type="number" min="0" name="tondi" class="validate" required>
           </div>
          </td>
          <td>
            <div class="input-field col s12">
            <input placeholder="Suara Paslon Nomor 2" id="tso" name="tso" type="number" min="0" class="validate" required>
          </div>
          </td>
          <td>
            <div class="input-field col s12">
            <input placeholder="Suara Paslon Nomor 3" id="rahmad" name="rahmad" type="number" min="0" class="validate" required>
          </di>
         </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <div class="col s6">
    <button class="waves-effect waves-light centered btn-large" type="submit" name="submit">Simpan Data <i class="material-icons right">save</i>
      </button>
    </div>
      <div class=" col s6 text-lighten-5">
          <h5>Jumlah TPS Disimpan : <?php echo $jumlahTPSMasuk;?> dari 499</h5>
      </div>
  </div>
</div>
</form>
</div>
</div>
<!-- Tutup Form -->
<!-- MODAL DAFTAR GAGAL -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5>MAAF, DATA TPS SUDAH ADA !!!</h5>
        <div class="divider"></div>
        <p>Data Suara : TPS <?php echo "$tps"; ?></p>
        <p>Desa : <?php echo "$desa"; ?></p>
        <p>Kecamatan : <?php echo "$kecamatan"; ?></p>
        <p><b>SUDAH ADA</b> dalam database.</p>
    </div>
    <div class="modal-footer">
        <a href="inputdata.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>
<!-- MODAL FORM TIDAK BOLEH KOSONG -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h5>MAAF, FORM TIDAK BOLEH KOSONG !!!</h5>
        <div class="divider"></div>
        <p>Mohon Pastikan Semua Form Sudah Terisi Dengan Benar.</p>
    </div>
    <div class="modal-footer">
        <a href="inputdata.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>
<!-- MODAL DAFTAR BERHASIL -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h5>SUKSES !!!</h5>
        <div class="divider"></div>
        <p>Data <b>BERHASIL DISIMPAN</b> Ke Database</p>
    </div>
    <div class="modal-footer">
        <a href="inputdata.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>


<!-- MODAL PERINGATAN DB -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h5>Peringatan !!!</h5>
        <div class="divider"></div>
        <p>Terdapat Kesalahan Dalam Database, Silahkan Hubungi Administrator Anda !</p>
    </div>
    <div class="modal-footer">
        <a href="daftar.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>
<?php require_once "view/footer.php" ?>
