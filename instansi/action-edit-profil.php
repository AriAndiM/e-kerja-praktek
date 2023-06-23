<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <link rel="shortcut icon" href="../assets/img/utm.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profil Pembimbing Lapangan | Pembimbing Lapangan</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

</html>
<?php
session_start();
include '../koneksi.php';

$nama = $_SESSION['nama_pembimbing_lapangan'];
$id_daftar_pembimbing = $_POST['id_daftar_pembimbing'];
$id_instansi = $_POST['id_instansi'];
$NIP_pembimbing_lapangan = $_POST['NIP_pembimbing_lapangan'];
$nama_pembimbing_lapangan = $_POST['nama_pembimbing_lapangan'];
$email_pembimbing_lapangan = $_POST['email_pembimbing_lapangan'];
$password_pembimbing_lapangan = $_POST['password_pembimbing_lapangan'];

$query = "UPDATE daftar_pembimbing SET id_daftar_pembimbing = '$id_daftar_pembimbing', id_instansi = '$id_instansi' , NIP_pembimbing_lapangan = '$NIP_pembimbing_lapangan', nama_pembimbing_lapangan = '$nama_pembimbing_lapangan', email_pembimbing_lapangan = '$email_pembimbing_lapangan', password_pembimbing_lapangan = '$password_pembimbing_lapangan' WHERE id_daftar_pembimbing = '$id_daftar_pembimbing'";
$sql = mysqli_query($conn, $query);
if (!$sql) { ?>
  <script>
    Swal.fire({
      title: 'GAGAL',
      text: "Update profil tidak berhasil",
      icon: 'error',
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "edit_profil.php";
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
        window.location.href = "profil.php";
      }
    })
  </script>
<?php } ?>