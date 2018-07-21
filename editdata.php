<?php require_once "view/header.php"; ?>
<div class="navbar-fixed">
        <nav class="teal accent-4">
            <!-- Menu Navbar -->
            <div class="container">
                <div class="nav-wrapper">
                    <a href="listdata.php" class="brand-logo">Menu Edit Data <i class="material-icons left">edit</i></a>
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
        <h4>Cari Data Untuk Di Edit</h4>
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
      <a href="editdata.php" class="waves-effect waves-light btn-large"><i class="material-icons right">cached</i>REFREASH TABEL</a>
    </div>
  </div>
<div id="listtabel" class="wrapper-align">
    <table border="1" class="striped bordered responsive-table">
        <tr style=" background-color:#00bfa5;">
            <th>Kecamatan</th>
            <th>Nama Desa</th>
            <th>Nomor TPS</th>
            <th>Tondi-Syarifuddin</th>
            <th>TSO-AZP</th>
            <th>RPH-SEH</th>
            <th>Edit</th>
            <th>Hapus</th>
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
                <!-- Tombol Edit -->
                <td align="center">
                  <form method="post" action="editdata.php">
                <!-- <button class="waves-effect waves-light btn" type="submit" name="action"><i class="material-icons right">edit</i>
                </button> -->
                <a href="editdata2.php?edit=<?php echo $data['id'];?>" type="submit"  class="btn waves-light waves-effect"><i class="material-icons right">create</i></a>
              </form>
                </td>
                <!-- Memunculkan Modal Hapus -->
                <?php
                if(isset($_GET['hapus']))
                {
                  echo "<script type='text/javascript'>
                  $(document).ready(function(){
                  $('.modal').modal({
                  dismissible: true,
                  opacity: .4,
                  starting_top: '5%', // Starting top style attribute
                  ending_top: '100%', // Ending top style attribute
                  in_duration: 400,
                  out_duration: 100,
                  });
                  $('#modal1').modal('open');
                  });
                  </script>";
                }
                ?>
                <!-- Tombol Hapus -->
                <td align="center">
                  <!-- <form method="post" action="editdata.php"> -->
                <a href="?hapus=<?php echo $data['id'];?>" type="submit"  class="btn waves-light waves-effect red"><i class="material-icons right">delete</i></a>
              <!-- </form> -->
                </td>
            </tr>
            <?php
  }
 }
?>
    </table>
  </div>
  <!-- Skrip Edit -->
<?php
if (isset($_GET['edit'])) {
  echo "<script type='text/javascript'>
  $(document).ready(function(){
  $('.modal').modal({
  dismissible: true,
  opacity: .4,
  starting_top: '5%', // Starting top style attribute
  ending_top: '100%', // Ending top style attribute
  in_duration: 400,
  out_duration: 100,
  });
  $('#modal2').modal('open');
  });
  </script>";
}
?>
<!-- Akhir Skrip Edit -->
</div>
<br>
<!-- SKRIP UNTUK MENGAMBIL DATA UNTUK DIEDIT SESUAI ID -->
<?php
$idTerpilih = @$_GET['edit'];
if(isset($_GET['edit']))
{
	$SQL = mysqli_query($link,"SELECT * FROM datamasuk WHERE id= $idTerpilih");
  $dataEdit = mysqli_fetch_array($SQL);
}
?>
</div>
<!-- Modal Edit Data -->
<div id="modal2" class="modal">
    <div class="modal-content">
      <!-- FORM Data -->
      <div class="container">
          <div class="row">
            <form class="col s12 container collection with-header" method="post" action="editdata.php">
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
                    <div class="input-field">
                    <input placeholder="Masukkan Kecamatan" value="<?php if(isset($_GET['edit'])) echo $dataEdit['kecamatan'];?>" id="kecamatan" name="kecamatan" type="text" class="validate" required>
                   </div>
                  </td>
                  <td>
                    <div class="input-field">
                    <input placeholder="Nomor TPS" value="<?php if(isset($_GET['edit'])) echo $dataEdit['tps'];?>" id="tps" name="tps" type="number" min="1" class="validate" required>
                  </div>
                  </td>
                  <td>
                    <div class="input-field">
                    <input placeholder="Nama Desa" value="<?php if(isset($_GET['edit'])) echo $dataEdit['desa'];?>" id="desa" name="desa" type="text" class="validate" required>
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
                  <div class="input-field">
                  <input placeholder="Suara Paslon Nomor 1" value="<?php if(isset($_GET['edit'])) echo $dataEdit['paslon_satu'];?>" id="tondi" type="number" min="0" name="tondi" class="validate" required>
                 </div>
                </td>
                <td>
                  <div class="input-field">
                  <input placeholder="Suara Paslon Nomor 2" value="<?php if(isset($_GET['edit'])) echo $dataEdit['paslon_dua'];?>" id="tso" name="tso" type="number" min="0" class="validate" required>
                </div>
                </td>
                <td>
                  <div class="input-field">
                  <input placeholder="Suara Paslon Nomor 3" value="<?php if(isset($_GET['edit'])) echo $dataEdit['paslon_tiga'];?>" id="rahmad" name="rahmad" type="number" min="0" class="validate" required>
                </div>
               </td>
              </tr>
            </tbody>
          </table>
          <!-- Skrip Update Data -->
      </form>
      </div>
      </div>
      <!-- Button Save Update -->
      <div class="container">
          <form class="row" method="post" action="editdata.php">
            <div class="col s6">
              <button href="editdata.php" type="submit" name="baru" class="modal-action modal-close waves-effect waves-green btn"><i class="material-icons right">save</i>Simpan Update</button>
              <!-- <a href="?tbupdate=<?php echo $dataEdit['id'];?>" type="submit"  class="btn modal-action modal-close waves-light waves-effect"><i class="material-icons right">save</i>Simpan Update</a> -->
            </div>
            <div class="col s6 push-5">
              <button type="submit" name="cancel" class="modal-action modal-close waves-effect waves-green btn"><i class="material-icons right">history</i>Kembali</button>
            </div>
          </form>
      </div>
      <!-- Penutup Button Save Update -->
      <!-- Tutup Form -->
    </div>
    <!-- Penutup konten Modal -->
</div>
<!-- Penutup Modal Edit Data -->

<!-- SKRIP UNTUK MENGAMBIL DATA UNTUK DIHAPUS SESUAI ID -->
<?php
$idTerpilih = @$_GET['hapus'];
if(isset($_GET['hapus']))
{
	$SQL = mysqli_query($link,"SELECT * FROM datamasuk WHERE id = $idTerpilih");
  $getROW = mysqli_fetch_array($SQL);
}
?>
<!-- MODAL Hapus Data -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5>KONFIRMASI</h5>
        <div class="divider"></div>
        <p><b>ANDA AKAN MENGHAPUS DATA</b></p>
        <p> TPS : <?php echo $getROW['tps'];?></p>
        <p> Desa : <?php echo $getROW['desa'];?></p>
        <p> Kecamatan : <?php echo $getROW['kecamatan'];?></p>
        <br>
    </div>

    <form class="row" method="post" action="editdata.php">
    <div class="col s6">
      <a href="?tbhapus=<?php echo $getROW['id'];?>" type="submit"  class="btn modal-action modal-close waves-light waves-effect red"><i class="material-icons right">delete</i>Hapus</a>
<!-- <button type="submit" name="tbhapus" class="modal-action modal-close waves-effect waves-green btn red"><i class="material-icons right">delete</i>Hapus</button> -->
    </div>
    <div class="col s6 pull-s2">
        <a href="editdata.php" class="modal-action modal-close waves-effect waves-green btn"><i class="material-icons right">history</i>Batal</a>
    </div>

  </form>
<!-- Skrip Menghapus Data -->
  <?php
  if (isset($_GET['tbhapus'])) {
    mysqli_query($link,"DELETE FROM datamasuk WHERE id =".$_GET['tbhapus']);
  }
  ?>
</div>
<!-- Penutup Modal Hapus -->

<?php require_once "view/footer.php" ?>
