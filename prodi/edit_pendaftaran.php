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
	<title>Prodi | Pendaftaran </title>
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
								<span class="d-none d-md-inline-block" style="color: white;">TEKNIK INFORMATIKA</span>
							</div>
						</span>
						<a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
							<i class="material-icons">&#xE5C4;</i>
						</a>
					</nav>
				</div>
				<div class="nav-wrapper">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="home.php">
								<i class="material-icons">home</i>
								<span>Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="pendaftaran.php">
								<i class="material-icons">app_registration</i>
								<span>Pendaftaran & Surat</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pembagianDosbing.php">
								<i class="material-icons">backup_table</i>
								<span>Pembagian Dosbing</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="dosbing.php">
								<i class="material-icons">format_list_bulleted</i>
								<span>Daftar Dosen Pembimbing</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="mahasiswa.php">
								<i class="material-icons">group</i>
								<span>Mahasiswa</span>
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
							<span class="text-uppercase page-subtitle">Website Kerja Praktek</span>
							<h3 class="page-title">Teknik Informatika UTM</h3>
						</div>
					</div>
					<!-- End Page Header -->
					<div class="container">
						<section class="vh-100 gradient-custom">
							<div class="container py-5 h-100">
								<div class="row justify-content-center align-items-center h-100">
									<div class="col-12 col-lg-9 col-xl-10">
										<div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
											<div class="card-body p-4 p-md-5">
												<h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Pendaftaran Kerja Praktek</h3>
												<?php
												$id = $_GET['id'];
												$query2 = "SELECT * FROM prodi WHERE id_prodi='$id'";
												$sql2 = mysqli_query($conn, $query2);
												$row = mysqli_fetch_array($sql2);
												?>
												<form method="POST" action="action-edit-pendaftaran.php">
													<input type="hidden" name="id_prodi" value="<?php echo $row['id_prodi'] ?>">
													<div class="mb-4">
														<?php
														error_reporting(0);
														$thnSkrg = date('Y');
														$thn2 = $thnSkrg - 1;
														?>

														<select class="form-control form-control-lg" name="semester" id="semester" required>
															<option value=""></option>
															<option value="Gasal <?php echo $thn2 . '/' . $thnSkrg; ?>">Gasal <?php echo $thn2 . '/' . $thnSkrg; ?></option>
															<option value="Genap <?php echo $thn2 . '/' . $thnSkrg; ?>">Genap <?php echo $thn2 . '/' . $thnSkrg; ?></option>
														</select>
														<label class="form-label" for="semester">Semester <span style="color: red;">*</span></label>

													</div>
													<div class="mb-4">
														<span for="">Tanggal pendaftaran</span><br>
														<div>
															<input type="date" class="form-control form-control-lg" name="tanggal_pendaftaran" id="tanggal_pendaftaran" value="<?php echo $row['tanggal_pendaftaran']; ?>">
														</div>
													</div>
													<div class="mb-4">
														<span for="">Tanggal batas pendaftaran</span><br>
														<div>
															<input type="date" class="form-control form-control-lg" name="tanggal_batas_pendaftaran" id="tanggal_batas_pendaftaran" value="<?php echo $row['tanggal_batas_pendaftaran']; ?>">
														</div>
													</div>
													<div class="mb-4">
														<span for="">Tanggal batas pengajuan surat</span><br>
														<div>
															<input type="date" class="form-control form-control-lg" name="tanggal_batas_surat" id="tanggal_batas_surat" value="<?php echo $row['tanggal_batas_surat']; ?>">
														</div>
													</div>

													<div class="mb-4">
														<button class="btn btn-primary" type="submit">submit</button>
													</div>
												</form>

											</div>
										</div>
									</div>
								</div>
						</section>
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