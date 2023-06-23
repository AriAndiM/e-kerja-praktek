<?php
session_start();
include '../koneksi.php';
//cek apakah sudah login
if (empty($_SESSION['login'])) {
  header("location:../login_instansi.php");
}
?>

<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profil | Pembimbing Lapangan</title>
  <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
  <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
  <link rel="shortcut icon" href="../assets/img/utm.png">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }
  </style>
</head>

<body class="h-100">

  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <!-- Profil -->
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="profil.php" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img class="user-avatar rounded-circle mr-2" src="../assets/img/user2.png" alt="User Avatar">
                <?php
                $nama_pembimbing_lapangan = $_SESSION['nama_pembimbing_lapangan'];
                $query = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama_pembimbing_lapangan'";
                $sql = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($sql);
                ?>
                <span class="d-none d-md-inline-block" style="color: black; font-size:medium;"><?php echo $row['nama_pembimbing_lapangan'] ?></span>

              </div>
            </a>

            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <!-- end profil -->

        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <i class="material-icons">home</i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="daftarMHS.php">
                <i class="material-icons">list</i>
                <span>Daftar Mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="monitoring.php">
                <i class="material-icons">monitor</i>
                <span>Monitoring</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="penilaian.php">
                <i class="material-icons">credit_score</i>
                <span>Penilaian</span>
              </a>
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

        <!-- profil -->
        <div class="main-content-container container-fluid px-4">
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Kerja Praktek Teknik Informatika UTM</span>
              <h3 class="page-title">Profil</h3>
            </div>
          </div>

          <!-- start -->
          <div class="row">
            <div class="col">
              <div class="card card-small mb-4 pt-3">
                <div class="card-header border-bottom text-center">
                  <div class="mb-3 mx-auto">
                    <img class="rounded-circle" src="../assets/img/user2.png" alt="User Avatar" width="110">
                  </div>
                  <?php
                  $nama = $_SESSION['nama_pembimbing_lapangan'];
                  $query = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama'";
                  $sql = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($sql)) {
                  ?>
                    <h4 class="mb-0"><?php echo $row['nama_pembimbing_lapangan'] ?></h4>
                  <?php } ?>
                  <span class="text-muted d-block mb-2">Pembimbing Lapangan</span>
                  <a href="edit_profil.php"><button type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i class="material-icons mr-1">edit</i>Edit Profil</button></a>
                </div>

                <!-- Biodata -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item p-3">
                    <div class="row">
                      <div class="col">
                        <?php
                        $nama = $_SESSION['nama_pembimbing_lapangan'];
                        $query = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama'";
                        $sql = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($sql)
                        ?>
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="nama_pembimbing_lapangan">Nama</label>
                              <input type="text" class="form-control" name="nama_pembimbing_lapangan" value="<?= $row['nama_pembimbing_lapangan'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="NIP_pembimbing_lapangan">NIP</label>
                              <input type="text" class="form-control" name="NIP_pembimbing_lapangan" value="<?= $row['NIP_pembimbing_lapangan'] ?>" readonly>
                            </div>
                          </div>
                          <!-- dosbing -->
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="email_pembimbing_lapangan">Email</label>
                              <input type="text" class="form-control" name="email_pembimbing_lapangan" value="<?= $row['email_pembimbing_lapangan'] ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="nama_instansi">Nama Instansi</label>
                              <?php
                              $nama = $_SESSION['nama_pembimbing_lapangan'];
                              $query1 = "SELECT * FROM `instansi` INNER JOIN daftar_pembimbing USING (id_instansi) WHERE nama_pembimbing_lapangan = '$nama'";
                              $sql1 = mysqli_query($conn, $query1);
                              $row1 = mysqli_fetch_array($sql1)
                              ?>
                              <!-- <?php echo ($row1['nama_instansi']) ?> -->
                              <input type="text" class="form-control" name="nama_instansi" placeholder="nama_instansi" value="<?= $row1['nama_instansi'] ?>" readonly>
                            </div>
                          </div>
                      </div>
                      </form>
                    </div>
              </div>
              </li>
              </ul>
              <!-- end Biodata -->

            </div>
          </div>

        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    </main>

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