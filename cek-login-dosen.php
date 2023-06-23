<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Dosen</title>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" href="assets/img/utm.png">
</head>

<body>
  <?php
  require 'koneksi.php';
  error_reporting(0);

  if (isset($_POST['login'])) {
    $NIP = $_POST['NIP'];
    $password_dosen = md5($_POST['password_dosen']);

    // pengecekan
    $data = "SELECT * FROM dosen WHERE NIP = '$NIP' AND password_dosen = '$password_dosen'";
    // echo ($data);die;
    $cek = mysqli_query($conn, $data);
    $result = mysqli_fetch_array($cek);
    // echo ($level);die;
    $user = $result['NIP'];
    $row = mysqli_num_rows($cek);
    // echo ($row);die;

    if ($row > 0) {
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['NIP'] = $user;
      $_SESSION['password_dosen'] = $password_dosen;
      $_SESSION['id_dosen_pembimbing'] ?>
      <script>
        Swal.fire({
          title: 'BERHASIL',
          text: "Selamat datang",
          icon: 'success',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "dosen/index.html";
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
            window.location.href = "login_dosen.php";
          }
        })
      </script>
  <?php }
  }
  ?>
</body>

</html>