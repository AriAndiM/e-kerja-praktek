<html>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
include '../koneksi.php';
session_start();

$id = $_GET['id'];
$query = "DELETE FROM laporan WHERE id_laporan='$id'";
$sql = mysqli_query($conn, $query);
if (!$sql) {
  echo "<script>alert('gagal menghapus laporan'); document.location.href='upload-laporan.php';</script>";
} else {
  echo "<script>document.location.href='upload-laporan.php';</script>";
}
?>