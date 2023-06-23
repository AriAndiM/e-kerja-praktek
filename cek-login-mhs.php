<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Mahasiswa</title>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
	<?php
	require 'koneksi.php';
	error_reporting(0);

	if (isset($_POST['login'])) {
		$NIM = $_POST['NIM'];
		$password = md5($_POST['password_mhs']);

		// pengecekan
		$data = "SELECT * FROM mahasiswa WHERE NIM = '$NIM' AND password_mhs = '$password'";
		// echo ($data);die;
		$cek = mysqli_query($conn, $data);
		$result = mysqli_fetch_array($cek);
		// echo ($level);die;
		$user = $result['NIM'];
		$row = mysqli_num_rows($cek);
		// echo ($row);
		// die;

		if ($row > 0) {
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['NIM'] = $user;
			$_SESSION['password_mhs'] = $password; ?>
			<script>
				Swal.fire({
					title: 'BERHASIL',
					text: "Selamat datang",
					icon: 'success',
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "mahasiswa/index-mahasiswa.php";
					}
				})
			</script>
		<?php
		} else { ?>
			<script>
				Swal.fire({
					title: 'GAGAL',
					text: "NIM / password anda salah.",
					icon: 'error',
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "login_mahasiswa.php";
					}
				})
			</script>
	<?php }
	}
	?>
</body>

</html>