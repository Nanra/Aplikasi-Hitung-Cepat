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
