<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<title>Login | TU & Prodi</title>
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

<body style="background: rgba(40, 58, 90, 0.9)">
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">
			<h1 class="logo me-auto"><a href="index.html">TEKNIK INFORMATIKA</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="index.html#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="index.html#about">Info</a></li>
					<li><a class="getstarted scrollto" href="index.html#login">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<!-- <section id="hero" class="align-items-center"> -->
	<div class="container mt-5 pt-4" data-aos="fade-up">
		<!-- <section class="text-center text-lg-start"> -->
		<style>
			.rounded-t-5 {
				border-top-left-radius: 0.5rem;
				border-top-right-radius: 0.5rem;
			}

			@media (min-width: 992px) {
				.rounded-tr-lg-0 {
					border-top-right-radius: 0;
				}

				.rounded-bl-lg-5 {
					border-bottom-left-radius: 0.5rem;
				}
			}
		</style>
		<div class="card mb-4 mt-5 px-4 py-4 px-md-4">
			<!-- <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background:  #37517e;"> -->
			<div class="container">
				<div class="row g-0 d-flex align-items-center">
					<div class="col-lg-4 d-none d-lg-flex">
						<img src="assets/img/log_tu&prodi.svg" alt="Trendy Pants and Shoes" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
					</div>
					<div class="col-lg-8">
						<div class="card-body py-5 px-md-5">
							<h3 style="color: #37517e" class="mt-3 mb-4">Login TU & Prodi</h3>
							<form method="POST" action="cek-login-tp.php">
								<!-- Email input -->
								<div class="form-outline mb-4">
									<input type="text" id="username_TP" class="form-control" name="username_TP" required />
									<label class="form-label" for="form2Example1">Username</label>
								</div>

								<!-- Password input -->
								<div class="form-outline mb-4">
									<input type="password" id="password_tp" class="form-control" name="password_tp" required />
									<label class="form-label" for="form2Example2">Password</label>
								</div>

								<!-- 2 column grid layout for inline styling -->

								<!-- Submit button -->
								<button type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</button>
								<!-- <div class="form-outline mb-4">
										<a href="regis_mahasiswa.html" class="form-label" for="form2Example2">Belum memiliki akun? Registrasi sekarang!</a>
									</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </section> -->
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