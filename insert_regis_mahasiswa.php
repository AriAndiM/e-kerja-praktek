<html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="assets/img/utm.png">

</html>
<?php
include "koneksi.php";
$NIM = $_POST["NIM"];
$nama_mahasiswa = $_POST["nama_mahasiswa"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$password_mhs = md5($_POST["password_mhs"]);

$sql = "INSERT INTO mahasiswa VALUES ('$NIM','$nama_mahasiswa','$jenis_kelamin','$tanggal_lahir','$agama','$alamat','$email','Daftar Akun','$password_mhs')";
$hasil = mysqli_query($conn, $sql);
if (!$hasil) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Registrasi gagal, NIM sudah terdaftar",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "regis_mahasiswa.php";
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
        window.location.href = "login_mahasiswa.php";
      }
    })
  </script>
<?php } ?>