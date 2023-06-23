<?php
  session_start();
  include '../koneksi.php';
  //cek apakah sudah login
  if(empty ($_SESSION['login'])){
    header("location:../login_dosen.php");
  }
  $NIM = $_GET['NIM'];
//   echo $NIM;
  $NIP = $_SESSION['NIP'];
  $data = "SELECT * FROM dosen WHERE NIP = '$NIP'";
  $query = mysqli_query($conn, $data);
  $row = mysqli_fetch_array($query);
  $que2="SELECT * FROM dosen_pembimbing WHERE NIP='$NIP'";
  $sql2 = mysqli_query($conn,$que2);
  $row2 = mysqli_fetch_array($sql2);
  $id_dosen_pembimbing = $row2['id_dosen_pembimbing']
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
                    <span class="text-uppercase page-subtitle">Kerja Praktek Teknik Informatika UTM</span>
                    <h3 class="page-title">Penilaian Dosen Pembimbing</h3>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Penilaian -->
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="mb-2">KETERANGAN</h3>
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <th>Kriteria</th>
                            <th>Indikator Penilaian</th>
                        </thead>
                        <tr>
                            <td>Perumusan Masalah</td>
                            <td>Ketajaman Perumusan Masalah, Tujuan Penelitian / Kerja Praktek, Kebaharuan dan Originalitas, Kesesuaian Judul dengan Isi</td>
                        </tr>
                        <tr>
                            <td>Manfaat Hasil Kerja Praktek</td>
                            <td>Pengembangan Ipteks, Pembangunan dan atau Pengembangan Kelembagaan</td>
                        </tr>
                        <tr>
                            <td>Tinjauan Pustaka</td>
                            <td>Relevansi dan Kemutakhiran, Kedalaman Tinjauan Pustaka</td>
                        </tr>
                        <tr>
                            <td>Metode Penelitian</td>
                            <td>Ketepatan Desain, Ketepatan Instrumen, Ketepatan Analisis</td>
                        </tr>
                        <tr>
                            <td>Presentasi & Tanya Jawab</td>
                            <td>Presentasi / Argumentasi</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>PENILAIAN</h3>
                    <?php 
                        // $NIP = $_SESSION['NIP'];
                        $NIM = $_GET['NIM'];
                        $que="SELECT * FROM dosen_pembimbing INNER JOIN mahasiswa USING (NIM) WHERE dosen_pembimbing.NIM='$NIM' AND id_dosen_pembimbing=$id_dosen_pembimbing";
                        $sql = mysqli_query($conn,$que);
                        $row = mysqli_fetch_array($sql);
                        // while ($row = mysqli_fetch_array($sql)){;

                        
                        // echo $id_dosen_pembimbing;
                        $query1 = "SELECT * FROM monitoring_dosen WHERE id_dosen_pembimbing = '$id_dosen_pembimbing' AND NIM='$NIM'";
                        $sql1 = mysqli_query($conn, $query1);
                        $row1 = mysqli_fetch_array(($sql1));
                        // echo $row1['id_monitoring_dosen'];
                        ?>
                        <!-- echo $row1['id_monitoring_dosen']; -->
                        <form method="POST" action="insert-nilai.php">
                            <input type="hidden" id="monitoring_dosen" name="id_monitoring_dosen" placeholder="id_monitoring_dosen" class="form-control mb-3" readonly value="<?= $row1['id_monitoring_dosen']; ?>">
                            <div>
                                <div class="mb-3">
                                    <?php 
                                // $NIP = $_SESSION['NIP'];
                                $NIM = $_GET['NIM'];
                                $sql = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE NIM ='$NIM'");
                                // $row3 = mysqli_fetch_array($sql);
                                $row1 = mysqli_fetch_array($sql);
                            ?>
                                <!-- <label for="nim" class="form-label mb-3">NIM</label>
                                <input type="text" id="nim" name="NIM" placeholder="NIM" class="form-control mb-3" readonly value=" -->

                                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                                <input type="text" class="form-control mb-3" id="exampleFormControlInput1" name='NIM' value="<?php echo $row1['NIM'] ?>" readonly>
                                
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Penilaian</label>
                                <input name="tanggal_penilaian_dosen" type="date" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <label for="exampleFormControlInput1" class="form-label">Perumusan Masalah</label>
                                <input name="rumusan_masalah" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <label for="exampleFormControlInput1" class="form-label">Manfaat Hasil Kerja Praktek</label>
                                <input name="manfaat" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <label for="exampleFormControlInput1" class="form-label">Tinjauan Pustaka</label>
                                <input name="tinjauan_pustaka" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <label for="exampleFormControlInput1" class="form-label">Metode Penelitian</label>
                                <input name="metode_penelitian" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <label for="exampleFormControlInput1" class="form-label">Presentasi & Tanya Jawab</label>
                                <input name="presentasi" type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="0-100" required>

                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <a href="penilaian.php" class="btn btn-outline-dark">Back</a>
                            </div>
                    </form>
                </div>
            </div>

        </div>
        </div>
</body>

</html>