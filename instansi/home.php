<?php
session_start();
include '../koneksi.php';
//cek apakah sudah login
if (empty($_SESSION['login'])) {
    header("location:../login_instansi.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pembimbing Lapangan</title>
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
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" href="profil.php" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img class="user-avatar rounded-circle mr-2" src="../assets/img/user2.png" alt="User Avatar">
                                <?php
                                $nama_pembimbing_lapangan = $_SESSION['nama_pembimbing_lapangan'];
                                $query = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama_pembimbing_lapangan'";
                                $sql = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <span class="d-none d-md-inline-block" style="color: black; font-size:medium;"><?php echo $row['nama_pembimbing_lapangan'] ?></span>
                                <?php } ?>
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
                            <a class="nav-link active" href="home.php">
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
                            <span class="text-uppercase page-subtitle">KERJA PRAKTEK TEKNIK INFORMATIKA UTM</span>
                            <h3 class="page-title">Teknik Informatika UTM</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card">
                            <img src="http://hi.umy.ac.id/wp-content/uploads/2019/02/Magang.png">
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Kerja Praktek (KP) adalah salah satu matakuliah peminatan yang ada di Program Studi Sarjana Teknik Informatika Fakultas Teknik Univesitas Trunojoyo Madura. Kerja Praktek merupakan implementasi dari pengetahuan dan ketrampilan terkait denganTeknik Informatika, yang telah diperoleh dari kegiatan perkuliahan untuk berkontribusi membantu pemecahan masalah di berbagai perusahaan atau instansi. Lingkup pekerjaan Kerja Praktek bukan hanya mencakup studi saja, namun harus memberikan suatu hasil kerja nyata atau konkret, seperti: analisis dan hasil atau rekomendasi penyelesaian suatu masalah, produk sederhana, desain, perencanaan, modul pelatihan,modul prosedur kerja, atau lainnya. Dalam Kerja Praktek ini mahasiswa diharapkan mampu mengembangkan kemampuan softskill-nya, seperti kemampuan berkomunikasi, kejujuran, kerjasama dalam tim, kemampuan interpersonal, beretika, berinisiatif, kemampuan beradapatasi, daya analitik, kemampuan berorganisasi, kepercayaan diri, kedispilinan, kemandirian. Adapun tujuan dari KP adalah : <br>
                                    1. Mahasiswa mampu mengenali aspek-aspek non teknis dalam dunia kerja nyata <br>
                                    2. Mahasiswa mampu mengenali permasalahan dan mengaplikasikan kemampuan / keahlian yang dimiliki. <br>
                                    3. Mahasiswa mampu mengembangkan kemampuan softskill-nya
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Untuk kerja praktek mahasiswa Prodi Teknik Informatika, dalam suatu perusahaan atau instansi dapat di tempatkan bagian yang berikaitan dengan Prodi Teknik Informatika itu sendiri. Seperti membuat suatu sistem untuk menyelesaikan permasalahan pada instansi atau perusahaan baik berbasis website, android, atau desktop. Dapat juga melakukan maintenance sistem yang sudah ada pada instansi atau perusahaan, atau dapat juga melakukan kerja praktek sesuai dengan kebutuhan di instansi atau perusahaan.
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p style="text-align: justify;">
                                    Selain sebagai tempat pelaksanaan kerja praktek, instansi atau perusahaan juga berperan untuk melakukan pembimbingan terhadap mahasiswa yang sedang melakukan kerja praktek. Pembimbingan ini dapat dilakukan oleh tenaga dari instansi atau perusahaan yang biasa di kenal dengan sebutan Dosen Pembimbing Lapangan. Adapun tugas dan wewenang Pembimbing Lapangan adalah sebagai berikut : <br>
                                    a. Memberikan pengarahan terhadap pekerjaan yang diberikan kepada mahasiswa. <br>
                                    b. Menandatangani proposal KP. <br>
                                    c. Mengawasi kemajuan terhadap pekerjaan yang diberikan kepada mahasiswa. <br>
                                    d. Memberikan nilai kerja praktek berdasarkan kriteria yang telah ditentukan pada sub bab penilaian. <br>
                                </p>
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