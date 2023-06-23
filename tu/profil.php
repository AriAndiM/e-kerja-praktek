<?php
  session_start();
  include '../koneksi.php';
  //cek apakah sudah login
  if(empty ($_SESSION['login'])){
    header("location:../login_tu&prodi.php");
  }
?>

<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lecturer Profile</title>
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
  <?php
  require "side.php";
  ?>
  <div class="color-switcher-toggle animated pulse infinite">
        <i class="material-icons">settings</i>
        </div>
        <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" href="profil.php" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img class="user-avatar rounded-circle mr-2" src="https://th.bing.com/th/id/OIP.ceP4a2ewgwDPZXCv3wDebgAAAA?w=210&h=210&c=7&r=0&o=5&pid=1.7" alt="User Avatar">
                                <span class="d-none d-md-inline-block">Name</span>
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
                            <a class="nav-link" href="home.php">
                                <i class="material-icons">edit</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="daftarMHS.php">
                                <i class="material-icons">vertical_split</i>
                                <span>Daftar Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="validasi.php">
                                <i class="material-icons">checklist</i>
                                <span>Validasi</span>
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
                    <div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Lecturer Profile</h3>
      </div>
    </div>
    <!-- End Page Header -->

    <!-- Default Light Table -->
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-small mb-4 pt-3">
          <div class="card-header border-bottom text-center">
            <div class="mb-3 mx-auto">
              <img class="rounded-circle" src="images/avatars/0.jpg" alt="User Avatar" width="110">
            </div>
            <h4 class="mb-0">Bintang Raditya Putra</h4>
            <span class="text-muted d-block mb-2">Dosen Pembimbing</span>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-4">
              <strong class="text-muted d-block mb-2">Description</strong>
              <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, cumque? Accusamus, natus voluptatibus iure delectus velit labore temporibus architecto consequatur dolores ea eos dolore nulla qui quae reprehenderit iste. Sequi.</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card card-small mb-4">
          <div class="card-header border-bottom">
            <h6 class="m-0">Profil Details</h6>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item p-3">
              <div class="row">
                <div class="col">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feFirstName">First Name</label>
                        <input type="text" class="form-control" id="feFirstName">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="feLastName">Last Name</label>
                        <input type="text" class="form-control" id="feLastName">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feEmailAddress">NIP</label>
                        <input type="email" class="form-control" id="feEmailAddress">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="fePassword">Email</label>
                        <input type="password" class="form-control" id="fePassword">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="feInputAddress">Address</label>
                      <input type="text" class="form-control" id="feInputAddress">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="feInputCity">Password</label>
                        <input type="text" class="form-control" id="feInputCity">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Default Light Table -->
  </div>
                <!-- / .main-navbar -->
                    
                    <!-- End Page Header -->
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
</body>

</html>