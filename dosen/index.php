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

<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>WebPage Dosen</title>
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
          <a class="nav-link active" href="index.php">
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
          <a class="nav-link " href="penilaian.php">
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
          <span class="text-uppercase page-subtitle">WEBSITE KERJA PRAKTEK</span>
          <h3 class="page-title">TEKNIK INFORMATIKA UTM</h3>
        </div>
      </div>
      <!-- End Page Header -->
      <div>
        <!--<img src="https://psdk.ui.ac.id/wp-content/uploads/2022/11/dosen.png" class="rounded mx-auto d-block">-->
        <img src="https://psdk.ui.ac.id/wp-content/uploads/2022/11/dosen.png" class="img-fluid animated" alt="">
      </div>
      <div class="card">
        <div class="card-body text-justify">
          <h4>Kerja Praktek</h4>
          <h6>
            Kerja Praktek (KP) adalah salah satu matakuliah wajib yang ada di Program
            Studi Teknik Informatika Fakultas Teknik Universitas Trunojoyo Madura. Kerja Praktek
            merupakan implementasi dari pengetahuan dan ketrampilan terkait
            dengan Teknik Informatika, yang telah diperoleh dari kegiatan perkuliahan
            untuk berkontribusi membantu pemecahan masalah di berbagai
            perusahaan / instansi. Lingkup pekerjaan Kerja Praktek bukan hanya
            mencakup studi saja, namun harus memberikan suatu hasil kerja nyata /
            konkret, seperti: analisis dan hasil atau rekomendasi penyelesaian suatu
            masalah, produk sederhana, desain, perencanaan, modul pelatihan,modul
            prosedur kerja, atau lainnya. Dalam Kerja Praktek ini mahasiswa diharapkan
            mampu mengembangkan kemampuan softskill-nya, seperti kemampuan
            berkomunikasi, kejujuran, kerjasama dalam tim, kemampuan interpersonal,
            beretika, berinisiatif, kemampuan beradapatasi, daya analitik, kemampuan
            berorganisasi, kepercayaan diri, kedispilinan, kemandirian.
          </h6>
        </div>
        <div class="card-body text-justify">
          <h4>Tujuan Kerja Praktek</h4>
          <h6>
            1. Mahasiswa mampu mengenali aspek-aspek non teknis dalam dunia
            kerja nyata <br>
            2. Mahasiswa mampu mengenali permasalahan dan mengaplikasikan
            kemampuan / keahlian yang dimiliki. <br>
            3. Mahasiswa mampu mengembangkan kemampuan softskill-nya
          </h6>
        </div>
        <div class="card-body text-justify">
          <h4>Dosen Pembimbing Kerja Praktek</h4>
          <h6>
            Dosen pembimbing adalah Tenaga pengajar tetap Universitas Trunojoyo Madura pada Program
            Studi Teknik Informatika Teknik yang ditentukan langsung oleh Kaprodi. Penunjukkan dosen pembimbing dilakukan setelah masa pendaftaran Kerja Praktek. Bagi mahasiswa yang melaksanakan KP Berkelompok, satu kelompok ditetapkan satu dosen pendamping. Setiap Dosen pembimbing Kerja Praktek di Universitas Trunojoyo Madura akan mendapatkan maksimal 10 mahasiswa bimbingan yang sedang melakukan Kerja Praktek. Tugas dari dosen pembimbing nantinya adalah memonitoring mahasiswa bimbingan kerja praktek dengan maksimal 5 kali pertemuan selama waktu pelaksanaan kerja praktek.
          </h6>
        </div>
        <div class="card-body text-justify">
          <h4>Tugas Dosen Pembimbing Kerja Praktek</h4>
          <h6>
            a. Mengarahkan mahasiswa dalam penyusunan proposal kerja praktek (
            jenis pekerjaan dan ruang lingkup pekerjaan) bersama dosen
            pembimbing lapangan. <br>
            b. Menandatangani proposal KP. <br>
            c. Membimbing mahasiswa untuk membantu ketika mahasiswa menemukan masalah selama kerja praktek. <br>
            d. Membimbing mahasiswa dalam pembuatan laporan kerja praktek. <br>
            e. Memberikan penilaian terhadap hasil kerja praktek sesuai dengan
            aturan pada sub bab penilaian.
          </h6>
        </div>
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