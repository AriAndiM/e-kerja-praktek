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
                            <a href="#mahasiswa" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">group</i>
                                <span>Mahasiswa</span></a>
                            <ul class="collapse list-unstyled" id="mahasiswa">
                                <li>
                                    <a href="datamahasiswa.php" class="nav-link ">Data Mahasiswa</a>
                                </li>
                                <li>
                                    <a href="proposal.php" class="nav-link ">Proposal Kerja Praktek</a>
                                </li>
                                <li>
                                    <a href="lpj.php" class="nav-link ">Laporan Kerja Praktek</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#dosen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">person</i>
                                <span>Dosen</span></a>
                            <ul class="collapse list-unstyled" id="dosen">
                                <li>
                                    <a href="datadosen.php" class="nav-link active">Data Dosen</a>
                                </li>
                                <li>
                                    <a href="datadosenpembimbing.php" class="nav-link ">Data Mahasiswa</a>

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
                            <a href="#prodi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link active"><i class="material-icons">home</i>
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
                            <a href="datainstansi.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">home</i>
                                <span>Instansi</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#pembimbinglapangan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="material-icons">home</i>
                                <span>Pembimbing Lapangan</span></a>
                            <ul class="collapse list-unstyled" id="pembimbinglapangan">
                                <li>
                                    <a href="datapembimbinglapangan.php" class="nav-link ">Data Pembimbing Lapangan</a>
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
              <span class="text-uppercase page-subtitle">Website Kerja Praktek</span>
              <h3 class="page-title">Informasi Pendaftaran Kerja Praktek</h3>
            </div>
          </div>
          <!-- End Page Header -->
          <div class="container">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px; padding: 30px;">

            <div style="text-align: center;" class="col-lg-12 col-md-6 col-sm-12 mb-4">
              <!-- <h3>Data Mahasiswa Selesai Kerja Praktek</h3> -->
            </div>
            <br>
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
          </div>
        </div>
      </div>
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