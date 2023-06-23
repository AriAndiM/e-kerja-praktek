<?php
include '../koneksi.php';
session_start();

$nim = $_GET['NIM'];

$query = "UPDATE form_pengantar SET status='Ditolak' WHERE id_pengantar=(SELECT form_pengantar.id_pengantar FROM pendaftaran JOIN form_pengantar ON pendaftaran.id_pendaftaran=form_pengantar.id_pendaftaran WHERE pendaftaran.NIM='$nim' ORDER BY id_pengantar DESC LIMIT 1)";
$sql = mysqli_query($conn, $query);
if(!$sql){
    echo "gagal";
} else {
    echo "<script>document.location.href='validasi.php';</script>";
}

?>