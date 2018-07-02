<?php

require_once "core/init.php";


// /* Untuk Masukkan Data */
// if(isset($_POST['save']))
// {
//
//      $nim = $MySQLiconn->real_escape_string($_POST['nim']);
//      $penulis = $MySQLiconn->real_escape_string($_POST['penulis']);
//      $judul = $MySQLiconn->real_escape_string($_POST['judul']);
//      $pembimbing = $MySQLiconn->real_escape_string($_POST['pembimbing']);
//
// 	 $SQL = $MySQLiconn->query("INSERT INTO ta(judul,nim,penulis,pembimbing) VALUES('$judul','$nim','$penulis','$pembimbing')");
//
// 	 if(!$SQL)
// 	 {
// 		 echo $MySQLiconn->error;
// 	 }
// }
// /* Penutup Masukkan Data */



// /* Untuk Hapus Data */
// if(isset($_GET['del']))
// {
// 	$SQL = mysqli_query($MySQLiconn,"DELETE FROM ta WHERE id=".$_GET['del']);
// 	header("Location: editTA.php");
// }
// /* Penutup Hapus Data */



/* Untuk Penutup Data */
if(isset($_GET['edit']))
{
	$SQL = mysqli_query($link,"SELECT * FROM datamasuk WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
  $kc = strtoupper($_POST['camat']);
  $tp = $_POST['tepes'];
  $ds = strtoupper($_POST['desa']);
  $tondi = $_POST['tondi'];
  $ts = $_POST['tso'];
  $rp = $_POST['rahmad'];
  $id = $_GET['edit'];
	// mysqli_query($link,"UPDATE datamasuk SET kecamatan='".$_POST['kecamatan']."', tps='".$_POST['tps']."' , desa='".$_POST['desa']."' , paslon_satu='".$_POST['tondi']."' WHERE id=".$_GET['edit']);
  $sql = "UPDATE datamasuk SET kecamatan = '$kc', tps='$tp', desa='$ds', paslon_satu='$tondi', paslon_dua='$ts', paslon_tiga='$rp' WHERE id='$id'";
  if (mysqli_query($link, $sql)) {
      echo "Record updated successfully";
      header("Location: editdata.php");
   } else {
      echo "Error updating record: " . mysqli_error($link);
   }
   mysqli_close($link);
	// header("Location: editdata2.php");
}
/* Penutup Update Data */

?>
