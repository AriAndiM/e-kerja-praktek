<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

<?php
// error_reporting(0);
include '../koneksi.php';
$NIM = $_POST['NIM'];
$NIP = $_POST['NIP'];
$query1 = "SELECT count(dosen_pembimbing.NIP) as jumlah FROM pendaftaran JOIN mahasiswa ON pendaftaran.NIM=mahasiswa.NIM JOIN dosen_pembimbing ON mahasiswa.NIM=dosen_pembimbing.NIM JOIN dosen ON dosen_pembimbing.NIP=dosen.NIP GROUP BY dosen_pembimbing.NIP;";
$sql1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_array($sql1);

$query = "INSERT INTO dosen_pembimbing (NIM, NIP) VALUES ('$NIM','$NIP');";
$sql = mysqli_query($conn, $query);
// var_dump($sql);
if (!$sql) {  ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "pembagian gagal",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "pembagianDosbing.php";
      }
    })
  </script>
<?php } else {
  header('location:pembagianDosbing.php');
}
?>