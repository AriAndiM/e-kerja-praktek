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
  <title>Penilaian Kerja Praktek</title>
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
            <li class="nav-item">
              <a class="nav-link text-nowrap px-3" href="profil-mahasiswa.php" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle mr-2" src="../assets/img/user2.png" alt="User Avatar">
                <?php
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
              <a class="nav-link " href="index-mahasiswa.php">
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
              <a class="nav-link active" href="penilaian.php">
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

        <!-- penilaian -->
        <div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <h3 class="page-title">Penilaian Kerja Praktek</h3>
            </div>
          </div>
          <!-- End Page Header -->

          <!-- nama dan nim mhs -->
          <div style="margin-bottom: 25px;">
            <table>
              <tr>
                <td>Nama &nbsp</td>
                <td>: &nbsp</td>
                <?php
                $nim = $_SESSION['NIM'];
                $query2 = "SELECT * FROM mahasiswa WHERE NIM = '$nim'";
                $sql2 = mysqli_query($conn, $query2);
                $row = mysqli_fetch_array($sql2);
                ?>
                <td><?php echo $row['nama_mahasiswa'] ?></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?php echo $row['NIM'] ?></td>
              </tr>
            </table>
          </div>
          <!-- end nama dan nim mhs -->

          <!-- Default Light Table -->
          <div class="row">
            <div class="col">
              <div class="card card-small mb-4">
                <div class="card-body p-0 pb-3 text-center">
                  <table class="table table-bordered">
                    <thead class="bg-light">
                      <tr>
                        <th scope="col" class="border-0">Kriteria</th>
                        <th scope="col" class="border-0">Indikator Penilaian</th>
                        <th scope="col" class="border-0">Bobot (%)</th>
                        <th scope="col" class="border-0">Nilai(0 – 100)</th>
                        <th scope="col" class="border-0">Nilai Huruf</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: left;">
                      <?php
                      error_reporting(0);
                      $nim = $_SESSION['NIM'];
                      $query3 = "SELECT * FROM dosen JOIN dosen_pembimbing ON dosen.NIP=dosen_pembimbing.NIP JOIN monitoring_dosen ON dosen_pembimbing.id_dosen_pembimbing=monitoring_dosen.id_dosen_pembimbing JOIN penilaian_dosen ON monitoring_dosen.id_monitoring_dosen=penilaian_dosen.id_monitoring_dosen WHERE penilaian_dosen.NIM='$nim';";
                      $sql3 = mysqli_query($conn, $query3);
                      $row3 = mysqli_fetch_array($sql3);
                      ?>
                      <tr>
                        <td>Perumusan Masalah</td>
                        <td>Ketajaman Perumusan Masalah, Tujuaan Penelitian / Kerja Praktek, Kebaharuan dan Originalitas, Kesesuaian Judul dengan Isi</td>
                        <td style="text-align: center;">15</td>
                        <td style="text-align: center;"><?php echo $row3['rumusan_masalah'] ?></td>
                        <?php
                        $nil_rumusan_masalah = $row3['rumusan_masalah'];
                        if ($nil_rumusan_masalah > 0 && $nil_rumusan_masalah < 45) {
                          $hasil_nil_rumusan_masalah = 'E';
                        } elseif ($nil_rumusan_masalah >= 45 && $nil_rumusan_masalah < 50) {
                          $hasil_nil_rumusan_masalah = 'D';
                        } elseif ($nil_rumusan_masalah >= 50 && $nil_rumusan_masalah < 55) {
                          $hasil_nil_rumusan_masalah = 'D+';
                        } elseif ($nil_rumusan_masalah >= 55 && $nil_rumusan_masalah < 60) {
                          $hasil_nil_rumusan_masalah = 'C';
                        } elseif ($nil_rumusan_masalah >= 60 && $nil_rumusan_masalah < 70) {
                          $hasil_nil_rumusan_masalah = 'C+';
                        } elseif ($nil_rumusan_masalah >= 70 && $nil_rumusan_masalah < 75) {
                          $hasil_nil_rumusan_masalah = 'B';
                        } elseif ($nil_rumusan_masalah >= 75 && $nil_rumusan_masalah <= 80) {
                          $hasil_nil_rumusan_masalah = 'B+';
                        } elseif ($nil_rumusan_masalah > 80 && $nil_rumusan_masalah <= 100) {
                          $hasil_nil_rumusan_masalah = 'A';
                        }
                        ?>
                        <td style="text-align: center;"><?php echo $hasil_nil_rumusan_masalah; ?></td>
                      </tr>

                      <tr>
                        <td>Manfaat Hasil Kerja Praktek</td>
                        <td>Pengembangan Ipteks, Pembangunan dan atau Pengembangan Kelembagaan</td>
                        <td style="text-align: center;">20</td>
                        <td style="text-align: center;"><?php echo $row3['manfaat'] ?></td>
                        <?php
                        $nil_manfaat_hasil = $row3['manfaat'];
                        if ($nil_manfaat_hasil > 0 && $nil_manfaat_hasil < 45) {
                          $hasil_nil_manfaat_hasil = 'E';
                        } elseif ($nil_manfaat_hasil >= 45 && $nil_manfaat_hasil < 50) {
                          $hasil_nil_manfaat_hasil = 'D';
                        } elseif ($nil_manfaat_hasil >= 50 && $nil_manfaat_hasil < 55) {
                          $hasil_nil_manfaat_hasil = 'D+';
                        } elseif ($nil_manfaat_hasil >= 55 && $nil_manfaat_hasil < 60) {
                          $hasil_nil_manfaat_hasil = 'C';
                        } elseif ($nil_manfaat_hasil >= 60 && $nil_manfaat_hasil < 70) {
                          $hasil_nil_manfaat_hasil = 'C+';
                        } elseif ($nil_manfaat_hasil >= 70 && $nil_manfaat_hasil < 75) {
                          $hasil_nil_manfaat_hasil = 'B';
                        } elseif ($nil_manfaat_hasil >= 75 && $nil_manfaat_hasil <= 80) {
                          $hasil_nil_manfaat_hasil = 'B+';
                        } elseif ($nil_manfaat_hasil > 80 && $nil_manfaat_hasil <= 100) {
                          $hasil_nil_manfaat_hasil = 'A';
                        }
                        ?>
                        <td style="text-align: center;"><?php echo $hasil_nil_manfaat_hasil; ?></td>
                      </tr>

                      <tr>
                        <td>Tinjauan Pustaka</td>
                        <td>Relevansi dan Kemutakhiran, Kedalaman, Tinjauan Pustaka</td>
                        <td style="text-align: center;">15</td>
                        <td style="text-align: center;"><?php echo $row3['tinjauan_pustaka'] ?></td>

                        <?php
                        $nil_tinjauan_pustaka = $row3['tinjauan_pustaka'];
                        if ($nil_tinjauan_pustaka > 0 && $nil_tinjauan_pustaka < 45) {
                          $hasil_nil_tinjauan_pustaka = 'E';
                        } elseif ($nil_tinjauan_pustaka >= 45 && $nil_tinjauan_pustaka < 50) {
                          $hasil_nil_tinjauan_pustaka = 'D';
                        } elseif ($nil_tinjauan_pustaka >= 50 && $nil_tinjauan_pustaka < 55) {
                          $hasil_nil_tinjauan_pustaka = 'D+';
                        } elseif ($nil_tinjauan_pustaka >= 55 && $nil_tinjauan_pustaka < 60) {
                          $hasil_nil_tinjauan_pustaka = 'C';
                        } elseif ($nil_tinjauan_pustaka >= 60 && $nil_tinjauan_pustaka < 70) {
                          $hasil_nil_tinjauan_pustaka = 'C+';
                        } elseif ($nil_tinjauan_pustaka >= 70 && $nil_tinjauan_pustaka < 75) {
                          $hasil_nil_tinjauan_pustaka = 'B';
                        } elseif ($nil_tinjauan_pustaka >= 75 && $nil_tinjauan_pustaka <= 80) {
                          $hasil_nil_tinjauan_pustaka = 'B+';
                        } elseif ($nil_tinjauan_pustaka > 80 && $nil_tinjauan_pustaka <= 100) {
                          $hasil_nil_tinjauan_pustaka = 'A';
                        }
                        ?>
                        <td style="text-align: center;"><?php echo $hasil_nil_tinjauan_pustaka; ?></td>
                      </tr>

                      <tr>
                        <td>Metode Penelitian</td>
                        <td>Ketepatan Desain, Ketepatan Instrumen, Ketepatan Analisis</td>
                        <td style="text-align: center;">20</td>
                        <td style="text-align: center;"><?php echo $row3['metode_penelitian'] ?></td>
                        <?php
                        $nil_metode_penelitian = $row3['metode_penelitian'];
                        $nil_ujian = $row3['nilai_ujian_kerja_praktek'];
                        if ($nil_metode_penelitian > 0 && $nil_metode_penelitian < 45) {
                          $hasil_nil_metode_penelitian = 'E';
                        } elseif ($nil_metode_penelitian >= 45 && $nil_metode_penelitian < 50) {
                          $hasil_nil_metode_penelitian = 'D';
                        } elseif ($nil_metode_penelitian >= 50 && $nil_metode_penelitian < 55) {
                          $hasil_nil_metode_penelitian = 'D+';
                        } elseif ($nil_metode_penelitian >= 55 && $nil_metode_penelitian < 60) {
                          $hasil_nil_metode_penelitian = 'C';
                        } elseif ($nil_metode_penelitian >= 60 && $nil_metode_penelitian < 70) {
                          $hasil_nil_metode_penelitian = 'C+';
                        } elseif ($nil_metode_penelitian >= 70 && $nil_metode_penelitian < 75) {
                          $hasil_nil_metode_penelitian = 'B';
                        } elseif ($nil_metode_penelitian >= 75 && $nil_metode_penelitian <= 80) {
                          $hasil_nil_metode_penelitian = 'B+';
                        } elseif ($nil_metode_penelitian > 80 && $nil_metode_penelitian <= 100) {
                          $hasil_nil_metode_penelitian = 'A';
                        }
                        ?>
                        <td style="text-align: center;"><?php echo $hasil_nil_metode_penelitian; ?></td>
                      </tr>

                      <tr>
                        <td>Presentasi dan Tanya Jawab</td>
                        <td>Presentasi atau Argumentasi</td>
                        <td style="text-align: center;">30</td>
                        <td style="text-align: center;"><?php echo $row3['presentasi'] ?></td>
                        <?php
                        $nil_presentasi = $row3['presentasi'];
                        if ($nil_presentasi > 0 && $nil_presentasi < 45) {
                          $hasil_nil_presentasi = 'E';
                        } elseif ($nil_presentasi >= 45 && $nil_presentasi < 50) {
                          $hasil_nil_presentasi = 'D';
                        } elseif ($nil_presentasi >= 50 && $nil_presentasi < 55) {
                          $hasil_nil_presentasi = 'D+';
                        } elseif ($nil_presentasi >= 55 && $nil_presentasi < 60) {
                          $hasil_nil_presentasi = 'C';
                        } elseif ($nil_presentasi >= 60 && $nil_presentasi < 70) {
                          $hasil_nil_presentasi = 'C+';
                        } elseif ($nil_presentasi >= 70 && $nil_presentasi < 75) {
                          $hasil_nil_presentasi = 'B';
                        } elseif ($nil_presentasi >= 75 && $nil_presentasi <= 80) {
                          $hasil_nil_presentasi = 'B+';
                        } elseif ($nil_presentasi > 80 && $nil_presentasi <= 100) {
                          $hasil_nil_presentasi = 'A';
                        }
                        ?>
                        <td style="text-align: center;"><?php echo $hasil_nil_presentasi; ?></td>
                      </tr>

                      <tr style="text-align: center;">
                        <th colspan="3" style="text-align: center;">TOTAL</th>
                        <td>
                          <?php
                          $sumnilai = $nil_rumusan_masalah + $nil_manfaat_hasil + $nil_tinjauan_pustaka + $nil_metode_penelitian + $nil_presentasi;
                          echo $sumnilai;
                          $nilai = $sumnilai / 5;
                          $nilaifinal = number_format($nilai, 1, '.', '');
                          if ($nilaifinal > 0 && $nilaifinal < 45) {
                            $hasil_nilaifinal = 'E';
                          } elseif ($nilaifinal >= 45 && $nilaifinal < 50) {
                            $hasil_nilaifinal = 'D';
                          } elseif ($nilaifinal >= 50 && $nilaifinal < 55) {
                            $hasil_nilaifinal = 'D+';
                          } elseif ($nilaifinal >= 55 && $nilaifinal < 60) {
                            $hasil_nilaifinal = 'C';
                          } elseif ($nilaifinal >= 60 && $nilaifinal < 70) {
                            $hasil_nilaifinal = 'C+';
                          } elseif ($nilaifinal >= 70 && $nilaifinal < 75) {
                            $hasil_nilaifinal = 'B';
                          } elseif ($nilaifinal >= 75 && $nilaifinal <= 80) {
                            $hasil_nilaifinal = 'B+';
                          } elseif ($nilaifinal > 80 && $nilaifinal <= 100) {
                            $hasil_nilaifinal = 'A';
                          }
                          ?>
                        </td>
                      </tr>
                      <tr>
                        <th colspan="3" style="text-align: center;">NILAI HURUF</th>
                        <td style="text-align: center;"><?php echo $hasil_nilaifinal; ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table" style="text-align: left;">
                    <tr>
                      <td></td>
                      <td style="width: 300px; padding: 3px;"><b>Nilai Sidang Kerja Praktek = <?php echo $nilaifinal; ?> </b> <br><br> Bangkalan, <?php echo date('d-m-Y', strtotime($row3['tanggal_penilaian_dosen'])); ?><br> Dosen Pembimbing <br> <br> <br> <br> <br> <br> <b><?php echo $row3['nama_dosen']; ?></b> <br> NIP. <?php echo $row3['NIP']; ?> </td>
                    </tr>
                  </table>
                  <div style="text-align: left;">
                    <a class="nav-link " href="template-penilaian-dosen.php" target="_BLANK">
                      <button type="button" class="mb-2 btn btn-outline-primary mr-2"><i class="material-icons">print</i>
                        <span>Cetak</span></button>
                    </a>
                  </div>
                </div>
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