<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="assets/img/utm.png">

</html>
<?php
include "koneksi.php";
// $NIM = $_POST["NIM"];
$id_instansi = $_POST["id_instansi"];
$NIP_pembimbing_lapangan = $_POST["NIP_pembimbing_lapangan"];
$nama_pembimbing_lapangan = $_POST["nama_pembimbing_lapangan"];
$email_pembimbing_lapangan = $_POST["email_pembimbing_lapangan"];
$password_pembimbing_lapangan = md5($_POST["password_pembimbing_lapangan"]);

$sql = "INSERT INTO daftar_pembimbing VALUES (NULL,'$id_instansi','$NIP_pembimbing_lapangan','$nama_pembimbing_lapangan','$email_pembimbing_lapangan','$password_pembimbing_lapangan')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Registrasi gagal",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "regis_instansi.php#regis_pembimbing_lapangan";
      }
    })
  </script>
<?php } else { ?>
  <script>
    Swal.fire({
      title: 'BERHASIL',
      text: "Silahkan login",
      icon: 'success',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "login_instansi.php";
      }
    })
  </script>
<?php } ?>