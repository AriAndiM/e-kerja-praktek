<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="../assets/img/utm.png">

</html>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
include '../koneksi.php';

$nim = $_SESSION['NIM'];
$NIM = $_POST['NIM'];
$nama = $_POST['nama_mahasiswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = "UPDATE mahasiswa SET NIM = '$NIM', tanggal_lahir = '$tgl_lahir', nama_mahasiswa = '$nama', email ='$email' , alamat = '$alamat' WHERE NIM = '$NIM'";
$sql = mysqli_query($conn, $query);
if (!$sql) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Update profil tidak berhasil",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "update-profil-mahasiswa.php";
      }
    })
  </script>
<?php } else { ?>
  <script>
    Swal.fire({
      title: 'BERHASIL',
      text: "Profil telah diperbarui",
      icon: 'success',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "profil-mahasiswa.php";
      }
    })
  </script>
<?php } ?>