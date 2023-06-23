<?php
session_start();
include '../koneksi.php';
//cek apakah sudah login
if (empty($_SESSION['login'])) {
  header("location:../login_tu&prodi.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Prodi</title>
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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <?php
  // require "side.php";
  ?>
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <span style="background-color: #0096C9;" class="navbar-brand w-100 mr-0" href="profil.php" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img class="user-avatar mr-2" src="../assets/img/utm.png" alt="User Avatar">
                <span class="d-none d-md-inline-block" style="color: white;">MASTER</span>
              </div>
            </span>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <div class="nav-wrapper">
          <!-- <div class="p-4 pt-5"> -->
          <!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg)"></a> -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <i class="material-icons">home</i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#mahasiswa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link active"><i class="material-icons">group</i>
                <span>Mahasiswa</span></a>
              <ul class="collapse list-unstyled" id="mahasiswa">
                <li>
                  <a href="datamahasiswa.php" class="nav-link active">Data Mahasiswa</a>
                </li>
                <li>
                  <a href="proposal.php" class="nav-link ">Proposal Kerja Praktek</a>
                </li>
                <li>
                  <a href="lpj.php" class="nav-link">Laporan Kerja Praktek</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#dosen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">person</i>
                <span>Dosen</span></a>
              <ul class="collapse list-unstyled" id="dosen">
                <li>
                  <a href="datadosen.php" class="nav-link ">Data Dosen</a>
                </li>
                <li>
                  <a href="datadosenpembimbing.php" class="nav-link ">Data Dosen Pembimbing</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#tu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">person</i>
                <span>Tata Usaha</span></a>
              <ul class="collapse list-unstyled" id="tu">
                <li>
                  <a href="daftarMahasiswaTU.php" class="nav-link ">Data Mahasiswa</a>
                </li>
                <li>
                  <a href="validasiTU.php" class="nav-link ">Validasi</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#prodi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">home</i>
                <span>Prodi</span></a>
              <ul class="collapse list-unstyled" id="prodi">
                <li>
                  <a href="pendaftaran.php" class="nav-link ">Informasi Pendaftaran</a>
                </li>
                <li>
                  <a href="mhsdone.php" class="nav-link ">Mahasiswa Selesai KP</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datainstansi.php">
                <i class="material-icons">home</i>
                <span>Instansi</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#pembimbinglapangan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link active"><i class="material-icons">home</i>
                <span>Pembimbing Lapangan</span></a>
              <ul class="collapse list-unstyled" id="pembimbinglapangan">
                <li>
                  <a href="datapembimbinglapangan.php" class="nav-link active">Data Pembimbing Lapangan</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../logout.php">
                <i class="material-icons">logout</i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
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
              <span class="text-uppercase page-subtitle">Kerja Praktek Teknik Informatika UTM</span>
              <h3 class="page-title">Hasil Monitoring Dosen Pembimbing</h3>
            </div>
          </div>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <?php
                $NIM = $_GET['NIM'];
                $query = "SELECT * FROM mahasiswa WHERE NIM = $NIM";
                $sql = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($sql)) { ?>
                  <div class="d-none d-md-inline-block mb-4" style="color: black; font-size:medium;">
                    <h6>Nama : <?php echo $row['nama_mahasiswa'] ?></h6>
                    <h6>NIM : <?php echo $row['NIM'] ?></h6>
                  </div>
                <?php } ?>
                <table class="table table-striped" style="text-align: center;">
                  <thead class="table-dark">
                    <th>Tanggal Monitoring</th>
                    <th>Judul</th>
                    <th>Catatan Monitoring</th>
                  </thead>
                  <tbody>
                    <?php
                    $NIM = $_GET['NIM'];
                    $query4 = "SELECT * FROM `monitoring_dosen` WHERE NIM = $NIM ORDER BY monitoring_dosen.tanggal_monitoring_dosen DESC;";
                    $sql4 = mysqli_query($conn, $query4);
                    $i = 1;
                    while ($row4 = mysqli_fetch_array($sql4)) { ?>
                      <tr>
                        <td><?php echo $row4['tanggal_monitoring_dosen'] ?></td>
                        <td><?php echo $row4['judul_ulasan']; ?></td>
                        <td><?php echo $row4['catatan_monitoring_dosen']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    </main>
  </div>
  </div>
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