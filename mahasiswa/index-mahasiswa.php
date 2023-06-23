<?php
session_start();
include '../koneksi.php';
//cek apakah sudah login
if (empty($_SESSION['login'])) {
  header("location:../login_mahasiswa.php");
}
?>

<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dashboard</title>
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

<body class="h-100">

  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <!-- Profil -->
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <li class="nav-item">
              <a class="nav-link text-nowrap px-3" href="profil-mahasiswa.php" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle mr-2" src="../assets/img/user2.png" alt="User Avatar">
                <?php
                // function inisial($nama){
                //     $arr = explode(' ', $nama);
                //     $singkatan = '';
                //     foreach($arr as $kata)
                //     {
                //         $singkatan .= substr($kata, 0, 1);
                //     }
                //     return $singkatan;
                // }

                $nim = $_SESSION['NIM'];
                $query = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
                $sql = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($sql)) {
                ?>
                  <span class="d-none d-md-inline-block" style="color: black; font-size:medium;"><?php $nama = $row['nama_mahasiswa'];
                                                                                                  $cetak = substr($nama, 0, 11);
                                                                                                  echo $cetak . '...';  ?></span>
                <?php } ?>
              </a>
            </li>

            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <!-- end profil -->

        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="index-mahasiswa.php">
                <i class="material-icons">insights</i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="form-pendaftaran.php">
                <i class="material-icons">edit_note</i>
                <span>Daftar Kerja Praktek</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="form-surat-pengantar.php">
                <i class="material-icons">picture_as_pdf</i>
                <span>Surat Pengantar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="upload-proposal.php">
                <i class="material-icons">attach_file</i>
                <span>Upload Proposal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="monitoring-mahasiswa.php">
                <i class="material-icons">monitor</i>
                <span>Monitoring</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="upload-laporan.php">
                <i class="material-icons">note_add</i>
                <span>Upload Laporan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="penilaian.php">
                <i class="material-icons">domain_verification</i>
                <span>Penilaian</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="berita-acara.php">
                <i class="material-icons">verified</i>
                <span>Berita Acara</span>
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

            <nav class="nav">
              <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
              </a>
            </nav>
          </nav>
        </div>
        <!-- / .main-navbar -->
        <?php
        include '../koneksi.php';
        $nim = $_SESSION['NIM'];
        $query = "SELECT * FROM mahasiswa WHERE NIM='$nim'";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($sql);
        ?>
        <div class="main-content-container container-fluid px-4">
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-7 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Kerja Praktek Teknik Informatika UTM</span>
              <h3 class="page-title" style="color: #0096C9;">Welcome, <?php echo $row['nama_mahasiswa'] ?></h3>
            </div>
          </div>

          <!-- Coba Progress -->

          <div class="row">
            <div style="text-align: center;" class="col-lg-12 col-md-6 col-sm-12 mb-4">
              <img src="images/welcome.svg" class="img-fluid animated" alt="">
            </div>

            <!-- Coba Progress -->

            <!-- Informasi -->
            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
              <div class="card card-small blog-comments">
                <div class="card-header border-bottom">
                  <h5 class="m-0" style="text-align: center;">Informasi</h5>
                </div>
                <div class="card-body p-0">
                  <div class="blog-comments__item d-flex p-3">
                    <?php
                    error_reporting(0);
                    // function tgl indo
                    function tgl_indo($tanggal)
                    {
                      $bulan = array(
                        1 =>   'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                      );
                      $pecahkan = explode('-', $tanggal);

                      // variabel pecahkan 0 = tanggal
                      // variabel pecahkan 1 = bulan
                      // variabel pecahkan 2 = tahun

                      return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                    }

                    $query = "SELECT * FROM prodi ORDER BY id_prodi DESC LIMIT 1";
                    $sql = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($sql);
                    $tgl_buka = $row['tanggal_pendaftaran'];
                    $tgl_tutup = $row['tanggal_batas_pendaftaran'];
                    ?>
                    <div class="blog-comments__avatar mr-3">
                      <h2><i class="material-icons btn-outline-primary">circle_notifications</i></h2>
                    </div>
                    <div class="blog-comments__content">
                      <div class="blog-comments__meta text-muted">
                        <span class="text-secondary" href="#">Pendaftaran Kerja Praktek</>
                          <!-- <span class="text-muted" style="font-size: smaller;"><?php echo tgl_indo($row['tanggal_input']) ?></span> -->
                      </div>
                      <p class="m-0 my-1 mb-2 text-muted">Dibuka dari tanggal <?php echo tgl_indo($tgl_buka) . ' sampai dengan ' . tgl_indo($tgl_tutup); ?></p>
                    </div>
                  </div>

                  <div class="blog-comments__item d-flex p-3">
                    <?php
                    error_reporting(0);
                    $query = "SELECT * FROM prodi ORDER BY id_prodi DESC LIMIT 1";
                    $sql = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($sql);
                    $tgl_buka = $row['tanggal_pendaftaran'];
                    $tgl_tutup = $row['tanggal_batas_pendaftaran'];
                    $tgl_bts_surat = $row['tanggal_batas_surat'];
                    ?>
                    <div class="blog-comments__avatar mr-3">
                      <h2><i class="material-icons btn-outline-primary">circle_notifications</i></h2>
                    </div>
                    <div class="blog-comments__content">
                      <div class="blog-comments__meta text-muted">
                        <span class="text-secondary" href="#">Pengajuan surat pengantar Kerja Praktek</>
                      </div>
                      <p class="m-0 my-1 mb-2 text-muted">Sampai dengan <?php echo tgl_indo($tgl_bts_surat); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Informasi -->

            <!-- Progress -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                  <div class="card card-small blog-comments">
                    <div class="card-header border-bottom">
                      <h5 class="m-0" style="text-align: center;">Aktivitas</h5>
                    </div>
                    <?php
                    // error_reporting(0);
                    $nim = $_SESSION['NIM'];
                    $query1 = "SELECT DISTINCT status_KP FROM log_mahasiswa WHERE NIM='$nim' AND status_KP NOT IN ('Daftar Akun');";
                    $sql1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($sql1)) {
                    ?>
                      <div class="blog-comments__item d-flex p-3">
                        <div class="blog-comments__avatar mr-3">
                          <h3><i class="material-icons btn-outline-success">task_alt</i></h3>
                        </div>
                        <div class="blog-comments__content">
                          <div class="blog-comments__meta text-muted">
                            <span class="text-secondary" href="#">Kerja Praktek</>
                              <?php
                              $query2 = "SELECT * FROM log_mahasiswa WHERE NIM='$nim' ORDER BY id_log DESC LIMIT 1;";
                              $sql2 = mysqli_query($conn, $query2);
                              $row2 = mysqli_fetch_array($sql2);
                              ?>
                              <span class="text-muted" style="font-size: 10px;"><?php echo date('d-m-Y', strtotime($row2['tgl_input_log'])) ?></span>
                          </div>
                          <p class="m-0 my-1 mb-2 text-muted">Anda telah <?php echo $row1['status_KP']; ?></p>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- end progress -->


          </div>
        </div>

      </main>
    </div>
  </div>
  <?php
  include "footer.php";
  ?>

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