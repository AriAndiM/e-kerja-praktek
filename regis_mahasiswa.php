<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<title>Arsha Bootstrap Template - Index</title>
	<meta content="" name="description" />
	<meta content="" name="keywords" />


	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet" />
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/img/utm.png">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet" />

	<style>
		.desc {
			text-align: justify;
		}
	</style>

	<!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background: #37517e;">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto"><a href="index.html">TEKNIK INFORMATIKA</a></h1>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="index.html#about">Info</a></li>
					<li><a class="getstarted scrollto" href="login_mahasiswa.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<!-- <section id="hero" class="align-items-center"> -->
	<div class="container mt-9">
		<!-- Section: Design Block -->
		<section class="">
			<!-- Jumbotron -->
			<div class="px-11 py-5 px-md-8 text-center text-lg-start" style="background:  #37517e;">
				<div class="container">
					<div class="row gx-lg-3 align-items-center">
						<div class="col-lg-5 mb-6 mb-lg-0" data-aos="zoom-in">
							<h1 class="my-5 display-3 fw-bold ls-tight" style="color: white;">
								Silahkan Melakukan<br />
								<span style="color:rgba(255, 255, 255, 0.6);">
									Registrasi Sebagai Mahasiswa</span>
							</h1>
						</div>

						<div class="col-lg-7 mb-6 mb-lg-0 justify-content-lg-end" data-aos="fade-up">
							<div class="card">
								<div class="card-body py-4 px-md-5">
									<form method="POST" action="insert_regis_mahasiswa.php">
										<div class="form-outline mb-2">
											<input type="text" id="nama_mahasiswa" class="form-control" name="nama_mahasiswa" required />
											<label class="form-label" for="form3Example3">Nama</label>
										</div>
										<!-- 2 column grid layout with text inputs for the first and last names -->
										<div class="row mt-2">
											<div class="col-md-6 mb-2">
												<div class="form-outline">
													<input type="text" id="NIM" class="form-control" name="NIM" required />
													<label class="form-label" for="form3Example1">NIM</label>
												</div>
											</div>
											<div class="col-md-6 mb-2">
												<div class="form-outline">
													<input type="date" id="tanggal_lahir" class="form-control" name="tanggal_lahir" required />
													<label class="form-label" for="form3Example2">Tanggal Lahir</label>
												</div>
											</div>
										</div>

										<div class="row mt-2">
											<div class="col-md-6 mb-2 px-3">
												<label for="inputState">Agama</label>
												<select class="form-control" id="agama" name="agama" require>
													<option value="Islam" selected>Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Katolik">Katolik</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
													<option value="Konghucu">Konghucu</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</div>
											<div class="col-md-6 mb-2">
												<p class="form-label mb-2 pb-1">Gender: </p>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" id="femaleGender" value="Laki-laki" require checked />
													<label class="form-check-label" for="femaleGender">Laki-laki</label>
												</div>

												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" id="maleGender" value="Perempuan" require />
													<label class="form-check-label" for="maleGender">Perempuan</label>
												</div>
											</div>
										</div>

										<div class="form-outline mb-2 mt-2">
											<input type="text" class="form-control" id="alamat" name="alamat" required />
											<label class="form-label" for="form3Example3">Alamat</label>
										</div>
										<!-- Email input -->
										<div class="form-outline mb-2 mt-2">
											<input type="email" class="form-control" id="email" name="email" required />
											<label class="form-label" for="form3Example3">Email Kampus</label>
										</div>

										<!-- Password input -->
										<div class="form-outline mb-2">
											<input type="password" class="form-control" id="password_mhs" name="password_mhs" required />
											<label class="form-label" for="form3Example4">Password</label>
										</div>

										<!-- Checkbox -->
										<div class="form-check d-flex mb-3">
											<input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" required />
											<label class="form-check-label" for="form2Example33"> Data yang saya masukan sudah benar</label>
										</div>

										<!-- Submit button -->
										<button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>


										<!-- Register buttons -->
										<div class="text-center">
											<a href="login_mahasiswa.php" class="form-label" for="form2Example2">Sudah memiliki akun? Login sekarang!</a>

										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Jumbotron -->
		</section>
		<!-- Section: Design Block -->
	</div>
	</section>
	<!-- End Hero -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Teknik Informatika</h3>
						<p>
							Kampus Unijoyo, Telang, <br />
							PO. BOX 2 Kamal - Bangkalan<br />
							Jawa Timur <br /><br />
							<!-- <strong>Phone:</strong> +1 5589 55488 55<br /> -->
							<strong>Email:</strong> humas@trunojoyo.ac.id<br />
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Social Networks</h4>
						<p>Teknik Informatika, Universitas Trunojoyo Madura</p>
						<div class="social-links mt-3">
							<a href="https://twitter.com/utmOfficial" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="https://web.facebook.com/profile.php?id=100063552044062" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="https://www.instagram.com/universitas_trunojoyo_madura/" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="https://www.youtube.com/@universitastrunojoyomadura2433" class="youtube"><i class="bx bxl-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container footer-bottom clearfix">
			<div class="copyright">
				&copy; Copyright <strong><span>Kerja Praktek</span></strong>. Teknik Informatika
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>
</body>

</html>