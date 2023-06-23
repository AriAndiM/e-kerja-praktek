<?php
include '../koneksi.php';
session_start();

$id= $_GET['id'];

$query = "UPDATE proposal INNER JOIN mahasiswa USING (NIM) SET status='Ditolak' WHERE id_proposal='$id' ORDER BY NIM DESC LIMIT 1";
$sql = mysqli_query($conn, $query);
if(!$sql){
    echo "gagal";
} else {
    echo "<script>document.location.href='proposal.php';</script>";
}
?>