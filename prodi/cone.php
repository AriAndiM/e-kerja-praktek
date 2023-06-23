<?php
include '../koneksi.php';
$tgl_sekarang = strtotime(date('Y-m-d'));
$qry = "SELECT * FROM prodi";
$sqli = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($sqli);
$tgl1 = strtotime($row['tanggal_batas_pendaftaran']);
// $tgl2 = date('Y-m-d', strtotime('+7 days', strtotime($tgl1)));
// echo $tgl2;
$kurang = $tgl_sekarang - $tgl1;
$cek = $kurang / 86400;
echo $cek;
?>