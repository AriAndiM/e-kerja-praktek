<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<title>Registrasi | Instansi</title>
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

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top" style="background-color: #37517e;">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto"><a href="index.html">TEKNIK INFORMATIKA</a></h1>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="index.html#about">Info</a></li>
					<li><a class="getstarted scrollto" href="login_instansi.php">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<section id="instansi" class="services section-bg">
		<div class="container mt-5" data-aos="fade-up">
			<div class="section-title">
				<h2>Instansi</h2>
				<p>Silahkan pilih apa yang ingin anda lakukan.</p>
			</div>

			<div class="row justify-content-center">
				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-building-fill"></i></div>
						<h4><a href="#daftar_instansi">Daftar Instansi</a></h4>
						<p>Dengan mendaftarkan instansi maka dapat mendaftar sebagai pembimbing lapangan</p>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-person-fill"></i></div>
						<h4><a href="#regis_pembimbing_lapangan">Pembimbing Lapangan</a></h4>
						<p>Dengan mendaftar sebagai pembimbing lapangan anda dapat memonitoring mahasiswa kerja praktek</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="daftar_instansi" style="background-color: hsl(0, 0%, 96%)">
		<div class="container mt-9">
			<!-- Jumbotron -->
			<div class="px-11 py-5 px-md-5 text-center text-lg-start">
				<div class="container">
					<div class="row gx-lg-5 align-items-center">
						<div class="col-lg-6 mb-5 mb-lg-0" data-aos="zoom-in">
							<h1 class="my-5 display-3 fw-bold ls-tight">
								Silahkan Mengisi<br />
								<span class="text-primary">
									Formulir Untuk Mendaftarkan Instansi</span>
							</h1>
						</div>

						<div class="col-lg-6 mb-6 mb-lg-0" data-aos="fade-up">
							<div class="card">
								<div class="card-body py-4 px-md-5">
									<form method="POST" action="daftar_instansi.php">
										<div class="form-outline mb-2">
											<input type="drop" class="form-control" name="nama_instansi" required />
											<label class="form-label" for="form3Example3">Nama Instansi</label>
										</div>

										<div class="form-outline mb-2">
											<input type="text" class="form-control" name="alamat_instansi" required />
											<label class="form-label" for="form3Example3">Alamat Instansi</label>
										</div>

										<!-- Email input -->
										<div class="form-outline mb-2">
											<input type="email" class="form-control" name="email_instansi" required />
											<label class="form-label" for="form3Example3">Email Instansi</label>
										</div>

										<!-- Checkbox -->
										<div class="form-check d-flex mb-3">
											<input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" required />
											<label class="form-check-label" for="form2Example33"> Data yang saya masukan sudah benar</label>
										</div>

										<!-- Submit button -->
										<button type="submit" class="btn btn-primary btn-block mb-3">Daftar</button>


										<!-- Register buttons -->
										<div class="text-center">
											<a href="login_instansi.php" class="form-label" for="form2Example2">Sudah memiliki akun? Login sekarang!</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jumbotron -->
	</section>

	<!-- ======= Hero Section ======= -->
	<!-- <section id="hero" class="align-items-center"> -->
	<!-- Section: Design Block -->
	<section id="regis_pembimbing_lapangan" style="background-color: hsl(0, 0%, 96%)">
		<div class="container mt-9">
			<!-- Jumbotron -->
			<div class="px-11 py-5 px-md-5 text-center text-lg-start">
				<div class="container">
					<div class="row gx-lg-5 align-items-center">
						<div class="col-lg-6 mb-5 mb-lg-0" data-aos="zoom-in">
							<h1 class="my-5 display-3 fw-bold ls-tight">
								Silahkan Melakukan<br />
								<span class="text-primary">
									Registrasi Sebagai Pembimbing Lapangan</span>
							</h1>
						</div>

						<div class="col-lg-6 mb-6 mb-lg-0" data-aos="fade-up">
							<div class="card">
								<div class="card-body py-4 px-md-5">
									<form method="POST" action="insert_regis_pembimbing_lapangan.php">
										<div class="form-outline mb-2">
											<label class="form-label" for="form3Example3">NIP</label>
											<input type="text" class="form-control" name="NIP_pembimbing_lapangan" required />
										</div>

										<div class="form-outline mb-2">
											<label class="form-label" for="form3Example3">Nama</label>
											<input type="text" class="form-control" name="nama_pembimbing_lapangan" required />
										</div>

										<!-- <div class="form-outline mb-2">
											<label class="form-label" for="form3Example3">NIM</label>
											<input type="text" class="form-control" name="NIM" required />
										</div> -->

										<div class="form-outline mb-2">
											<label for="inputState">Nama Instansi</label>
											<select class="form-control" name="id_instansi" required>
												<option>Pilih Instansi</option>
												<!-- <option value="3">Pendidikan</option> -->
												<?php
												include "koneksi.php";

												$sql = "SELECT * FROM instansi";
												$hasil = mysqli_query($conn, $sql);

												while ($row = mysqli_fetch_array($hasil)) { ?>
													<option value="<?php echo ($row['id_instansi']) ?>"><?php echo ($row['nama_instansi']) ?></option>
												<?php } ?>
											</select>
										</div>

										<!-- Email input -->
										<div class="form-outline mb-2">
											<label class="form-label" for="form3Example3">Email</label>
											<input type="email" class="form-control" name="email_pembimbing_lapangan" required />
										</div>

										<!-- Password input -->
										<div class="form-outline mb-2">
											<label class="form-label" for="form3Example4">Password</label>
											<input type="password" class="form-control" name="password_pembimbing_lapangan" required />
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
											<a href="login_instansi.php" class="form-label" for="form2Example2">Sudah memiliki akun? Login sekarang!</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jumbotron -->
	</section>
	<!-- Section: Design Block -->
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