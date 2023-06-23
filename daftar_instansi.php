<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="assets/img/utm.png">

</html>
<?php
include "koneksi.php";
$nama_instansi = $_POST["nama_instansi"];
$alamat_instansi = $_POST["alamat_instansi"];
$email_instansi = $_POST["email_instansi"];

$sql = "INSERT INTO instansi VALUES (NULL,'$nama_instansi','$alamat_instansi','$email_instansi')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Pendaftaran instansi gagal",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "regis_instansi.php#daftar_instansi";
      }
    })
  </script>
<?php } else { ?>
  <script>
    Swal.fire({
      title: 'BERHASIL',
      text: "Pendaftaran instansi berhasil",
      icon: 'success',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "regis_instansi.php#regis_pembimbing_lapangan";
      }
    })
  </script>
<?php } ?>