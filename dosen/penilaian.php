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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian | Dosen</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="shortcut icon" href="../assets/img/utm.png">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <!-- Main Sidebar -->
    <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                <a class="navbar-brand w-100 mr-0" href="profil.php" style="line-height: 25px;">
                    <div class="d-table m-auto">
                        <img class="user-avatar rounded-circle mr-2" src="../assets/img/dosen.png" alt="User Avatar">
                        <span class="d-none d-md-inline-block"><?php $nama = $row['nama_dosen']; $cetak = substr($nama, 0, 11); echo $cetak.'...';  ?></span>
                    </div>
                </a>
                <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                    <i class="material-icons">&#xE5C4;</i>
                </a>
            </nav>
        </div>
        <div class="nav-wrapper">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="daftar-mahasiswa.php">
                        <i class="material-icons">list</i>
                        <span>Daftar Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berkas.php">
                        <i class="material-icons">drive_file_move</i>
                        <span>Berkas Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="monitoring.php">
                        <i class="material-icons">monitor</i>
                        <span>Monitoring</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="penilaian.php">
                        <i class="material-icons">credit_score</i>
                        <span>Penilaian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../logout.php">
                        <i class="material-icons">logout</i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End Main Sidebar -->
    <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                <ul class="navbar-nav border-left flex-row ">
                    <li class="nav-item border-right dropdown notifications">
                        <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <div class="notification__icon-wrapper">
                                    <div class="notification__icon">
                                        <i class="material-icons">&#xE8D1;</i>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                        </div>
                    </li>
                </ul>
                <nav class="nav">
                    <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                        <i class="material-icons">&#xE5D2;</i>
                    </a>
                </nav>
            </nav>
        </div>

    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">KERJA PRAKTEK TEKNIK INFORMATIKA UTM</span>
                <h3 class="page-title">Penilaian</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="table-responsive">
        <table class="table table-striped" style="text-align: center;">
                <thead class="table-dark">
                    <th>NIM</th>
                    <th>NAMA MAHASISWA</th>
                    <th>EMAIL</th>
                    <th colspan="2">ACTION</th>
                </thead>
                <?php

                include '../koneksi.php';
                $NIP = $_SESSION['NIP'];
                $sql = "SELECT * FROM mahasiswa INNER JOIN dosen_pembimbing ON mahasiswa.NIM=dosen_pembimbing.NIM WHERE dosen_pembimbing.NIP = '$NIP'";
                $data = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($data)) {
                ?>

                    <tbody>
                        <td><?= $row["NIM"]  ?></td>
                        <td><?= $row["nama_mahasiswa"]  ?></td>
                        <td><?= $row["email"]  ?></td>
                        <td>
                            <a href="nilai.php?NIM=<?= $row['NIM']?>" class="btn btn-outline-secondary">Nilai</a>
                        </td>
                        <td>
                            <a href="hasil-nilai.php?NIM=<?= $row['NIM']?>" class="btn btn-outline-secondary">Lihat Nilai</a>
                        </td>


                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    
          <style>
            /* CSS untuk layar dengan lebar maksimum 600px (contoh untuk perangkat Android) */
            @media only screen and (max-width: 600px) {
              /* Mengatur lebar kontainer utama */
              .main-content-container {
                padding-left: 0;
                padding-right: 0;
              }
              /* Mengatur lebar kolom dalam page-header */
              .col-12.col-sm-7 {
                width: 100%;
              }
              /* Mengatur tampilan teks pada kolom dalam page-header */
              .col-12.col-sm-7.text-center.text-sm-left.mb-0 {
                text-align: center;
              }
              /* Mengatur margin pada tombol submit */
              .btn.btn-primary,
              .btn.btn-danger,
              .btn.btn-warning {
                margin: 10px 0;
              }
              /* Mengatur lebar tabel agar dapat di-scroll secara horizontal */
              .table-responsive {
                overflow-x: auto;
              }
            }
          </style>
          <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
          <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
          <script src="scripts/extras.1.1.0.min.js"></script>
          <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
          <script src="scripts/app/app-blog-overview.1.1.0.js"></script>    
</body>

</html>