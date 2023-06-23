<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | TU & Prodi</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
  <?php
  session_start();
  include 'koneksi.php';
  // require 'koneksi.php';
  error_reporting(0);

  if (isset($_POST['login'])) {
    $username_TP = $_POST['username_TP'];
    $password_tp = md5($_POST['password_tp']);

    // pengecekan
    $data = "SELECT * FROM login_tp WHERE username_TP = '$username_TP' AND password_tp = '$password_tp'";
    // echo ($data);die;
    $cek = mysqli_query($conn, $data);
    // echo ($level);die;
    $result = mysqli_fetch_assoc($cek);
    $user = $result['username_TP'];
    $row = mysqli_num_rows($cek);
    // echo ($row);die;

    if ($row > 0) {
      session_start();
      // $hasil = mysqli_fetch_assoc($cek);
      if ($result['level'] == "prodi") {
        $_SESSION['login'] = true;
        $_SESSION['username_TP'] = $user;
        $_SESSION['password_tp'] = $password_tp;
        $_SESSION['level'] = "prodi"; ?>
        <script>
          Swal.fire({
            title: 'BERHASIL',
            text: "Selamat datang",
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "prodi/home.php";
            }
          })
        </script>
      <?php
      } elseif ($result['level'] == "tu") {
        $_SESSION['login'] = true;
        $_SESSION['username_TP'] = $user;
        $_SESSION['password_tp'] = $password_tp;
        $_SESSION['level'] = "tu"; ?>
        <script>
          Swal.fire({
            title: 'BERHASIL',
            text: "Selamat datang",
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "tu/home.php";
            }
          })
        </script>
      <?php
      } elseif ($result['level'] == "master") {
        $_SESSION['login'] = true;
        $_SESSION['username_TP'] = $user;
        $_SESSION['password_tp'] = $password_tp;
        $_SESSION['level'] = "master"; ?>
        <script>
          Swal.fire({
            title: 'BERHASIL',
            text: "Selamat datang",
            icon: 'success',
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "master/home.php";
            }
          })
        </script>
      <?php
      } else {
        echo "<script> alert('Username atau Password salah'); document.location.href='login.php';</script>";
      }
    } else { ?>
      <script>
        Swal.fire({
          title: 'GAGAL',
          text: "username / password anda salah.",
          icon: 'error',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "login_tu&prodi.php";
          }
        })
      </script>
  <?php }
  }
  ?>
</body>

</html>

<!-- <?php
      session_start();
      include 'koneksi.php';

      $username_TP = $_POST['username_TP'];
      $password_tp = $_POST['password_tp'];

      $login = mysqli_query($conn, "SELECT * FROM login_tp WHERE username_TP='$username_TP' AND password_tp = '$password_tp'");
      $cek = mysqli_num_rows($login);

      if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);
        if ($data['level']) {
          # code...
        }
      }

      ?> -->