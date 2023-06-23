<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Pembimbing Lapangan</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
  <?php
  require 'koneksi.php';
  error_reporting(0);

  if (isset($_POST['login'])) {
    $nama_pembimbing = $_POST['nama_pembimbing_lapangan'];
    $password = md5($_POST['password_pembimbing_lapangan']);

    // pengecekan
    $data = "SELECT * FROM daftar_pembimbing WHERE nama_pembimbing_lapangan = '$nama_pembimbing' AND password_pembimbing_lapangan = '$password'";
    // echo ($data);
    // die;
    $cek = mysqli_query($conn, $data);
    $result = mysqli_fetch_array($cek);
    // echo ($result);
    // die;
    $user = $result['nama_pembimbing_lapangan'];
    $id = $result['id_daftar_pembimbing'];
    $row = mysqli_num_rows($cek);
    // echo ($row);
    // die;

    if ($row > 0) {
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['nama_pembimbing_lapangan'] = $user;
      $_SESSION['id_daftar_pembimbing'] = $id;
      $_SESSION['password_pembimbing_lapangan'] = $password; ?>
      <script>
        Swal.fire({
          title: 'BERHASIL',
          text: "Selamat datang",
          icon: 'success',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "instansi/home.php";
          }
        })
      </script>
    <?php
    } else { ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "username / password anda salah.",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "login_instansi.php";
          }
        })
      </script>
  <?php }
  }
  ?>
</body>

</html>