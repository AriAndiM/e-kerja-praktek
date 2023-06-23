<?php
include '../koneksi.php';
$nim = $_GET['NIM'];
$query = "SELECT * FROM mahasiswa JOIN pendaftaran ON mahasiswa.NIM=pendaftaran.NIm JOIN form_pengantar ON pendaftaran.id_pendaftaran=form_pengantar.id_pendaftaran WHERE mahasiswa.NIM='$nim'";
$sql = mysqli_query($conn, $query);
$row  = mysqli_fetch_array($sql);
$nama = $row['nama_mahasiswa'];
$nim = $row['NIM'];
echo 'Nama :'.$nama;
echo 'Mahasiswa :'.$nim;

?>