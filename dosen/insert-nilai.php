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
  <title>Input nilai | Pembimbing Lapangan</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
  <?php
    session_start();
    include '../koneksi.php';
    //cek apakah sudah login
    if(empty ($_SESSION['login'])){
      header("location:../login_dosen.php");
    }
    $NIP = $_SESSION['NIP'];
    $data = "SELECT * FROM dosen WHERE NIP = '$NIP'";
    $query = mysqli_query($conn, $data);
    $row = mysqli_fetch_array($query);
    $que2="SELECT * FROM dosen_pembimbing WHERE NIP='$NIP'";
    $sql2 = mysqli_query($conn,$que2);
    // $row2 = mysqli_fetch_array($sql2);
    while ($row3 = mysqli_fetch_array($sql2)) {
    // $id_dosen_pembimbing = $row2['id_dosen_pembimbing']
  ?>
  <?php
  $id = $row3['id_dosen_pembimbing'];
}
  $id_monitoring_dosen = $_POST['id_monitoring_dosen'];
  $NIM = $_POST['NIM'];
  $rumusan_masalah = $_POST['rumusan_masalah'];
  $manfaat = $_POST['manfaat'];
  $tinjauan_pustaka = $_POST['tinjauan_pustaka'];
  $metode_penelitian = $_POST['metode_penelitian'];
  $presentasi = $_POST['presentasi'];
  $tanggal_penilaian_dosen = $_POST['tanggal_penilaian_dosen'];
  $querycek = "SELECT * FROM penilaian_dosen WHERE NIM = $NIM";
  $sqlcek = mysqli_query($conn, $querycek);
  $row = mysqli_num_rows($sqlcek);
  if ($row >= 1) { ?>
    <script>
      Swal.fire({
        title: 'GAGAL',
        text: "Mahasiswa sudah dinilai jika ingin merubah silahkan edit nilai",
        icon: 'error',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "penilaian.php";
        }
      })
    </script>
  <?php } else {
    $query1 = "INSERT INTO penilaian_dosen VALUES (null,'$id_monitoring_dosen ', '$NIM', '$rumusan_masalah', '$manfaat', '$tinjauan_pustaka', '$metode_penelitian','$presentasi', '$tanggal_penilaian_dosen')";
    $sql1 = mysqli_query($conn, $query1); ?>
    <script>
      Swal.fire({
        title: 'BERHASIL',
        text: "Nilai mahasiswa berhasil diinputkan",
        icon: 'success',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "hasil-nilai.php?NIM=<?php echo $NIM ?>";
        }
      })
    </script>

  <?php } ?>
</body>

</html>