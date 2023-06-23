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
  <title>Menambahkan ulasan | Pembimbing Lapangan</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
  <?php
  include '../koneksi.php';
  session_start();
  $nama_pembimbing_lapangan = $_SESSION['nama_pembimbing_lapangan'];
  $query = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama_pembimbing_lapangan'";
  $sql = mysqli_query($conn, $query);
  // $sql = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($sql)) {
  ?>
  <?php
    $id = $row['id_daftar_pembimbing'];
  }
  $id_daftar_pembimbing = $id;
  $judul_ulasan = $_POST['judul_ulasan'];
  $NIM = $_POST['NIM'];
  $tanggal_monitoring_instansi = $_POST['tanggal_monitoring_instansi'];
  $catatan_monitoring_instansi = $_POST['catatan_monitoring_instansi'];
  $query1 = "INSERT INTO monitoring_instansi VALUES (null,'$id_daftar_pembimbing', '$NIM', '$tanggal_monitoring_instansi', '$judul_ulasan', '$catatan_monitoring_instansi');";
  $sql1 = mysqli_query($conn, $query1);
  if (!$sql) { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "Ulasan monitoring gagal ditambahkan.",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "ulasan.php";
        }
      })
    </script>
  <?php } else { ?>
    <script>
      Swal.fire({
        title: 'BERHASIL',
        text: "Ulasan monitoring berhasil ditambahkan",
        icon: 'success',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "hasilUlasan.php?NIM=<?php echo $NIM ?>";
        }
      })
    </script>
  <?php }
  ?>
</body>

</html>