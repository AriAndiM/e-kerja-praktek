<html>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
include '../koneksi.php';
session_start();

$id = $_GET['id'];
$query = "DELETE FROM proposal WHERE id_proposal='$id'";
$sql = mysqli_query($conn, $query);
if (!$sql) {
  echo "<script>alert('gagal menghapus proposal'); document.location.href='upload-proposal.php';</script>";
} else {
  echo "<script>document.location.href='upload-proposal.php';</script>";
}
?>